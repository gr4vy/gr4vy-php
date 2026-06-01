<?php

declare(strict_types=1);

/*
 * Summarises endpoint reach for the PR comment.
 *
 * Reach is computed from *observed HTTP calls*, not code coverage: the test HTTP
 * client (Tests/Utils/TestEnvironment.php, gated on GR4VY_TRACK_HTTP) logs the
 * method + path of every request to coverage/http/*.jsonl. We build the operation
 * catalogue from the generated resource classes (src/*.php) by pairing each
 * `Utils\Utils::generateUrl($baseUrl, '<template>'...)` with the HTTP method of the
 * `new \GuzzleHttp\Psr7\Request('<METHOD>', $url)` that follows it, then mark an
 * operation reached only if a matching request was actually sent — so an operation
 * that fails local validation before issuing a request does not count.
 *
 * Writes coverage/endpoint-coverage.md (for the PR comment) and prints it.
 * Exits 0 always — this is a report, not a gate.
 */

$root = dirname(__DIR__);
$coverageDir = $root.'/coverage';
$sdkDir = $root.'/src';

// 1. Build the operation catalogue from the generated resource classes.
//    Each operation looks like:
//      $url = Utils\Utils::generateUrl($baseUrl, '/transactions/{transaction_id}', $request);
//      ... $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
$templateRe = "/generateUrl\(\s*\\\$baseUrl\s*,\s*'([^']+)'/";
$methodRe = "/new\s+\\\\?GuzzleHttp\\\\Psr7\\\\Request\(\s*'(GET|POST|PUT|PATCH|DELETE)'/i";

$opCatalogue = [];
$seen = [];
foreach (glob($sdkDir.'/*.php') as $file) {
    $src = (string) file_get_contents($file);
    if (! preg_match_all($templateRe, $src, $matches, PREG_OFFSET_CAPTURE)) {
        continue;
    }
    foreach ($matches[1] as $m) {
        $template = $m[0];
        $offset = $m[1];
        if ($template === '' || $template[0] !== '/') {
            continue;
        }
        // Find the HTTP method that follows this generateUrl assignment.
        $after = substr($src, $offset, 2000);
        if (! preg_match($methodRe, $after, $mm)) {
            continue;
        }
        $method = strtoupper($mm[1]);
        $key = "{$method} {$template}";
        if (isset($seen[$key])) {
            continue;
        }
        $seen[$key] = true;
        $pattern = '#^'.preg_replace('/\{[^\/}]+\}/', '[^/]+', $template).'$#';
        preg_match_all('/\{[^\/}]+\}/', $template, $params);
        $opCatalogue[] = [
            'op' => $key,
            'method' => $method,
            'template' => $template,
            'pattern' => $pattern,
            'params' => count($params[0]),
        ];
    }
}

// 2. Load observed HTTP calls (per-process files).
$calls = [];
foreach (glob($coverageDir.'/http/*.jsonl') ?: [] as $f) {
    foreach (explode("\n", (string) file_get_contents($f)) as $line) {
        $line = trim($line);
        if ($line === '') {
            continue;
        }
        $decoded = json_decode($line, true);
        if (is_array($decoded) && isset($decoded['method'], $decoded['pathname'])) {
            $calls[] = $decoded;
        }
    }
}

$httpTracked = count($calls) > 0;

// 3. Match calls to operations — most-specific template wins (fewest path params,
//    then longest template) so /buyers/gift-cards is not miscredited to
//    /buyers/{buyer_id}.
$reached = [];
if ($httpTracked) {
    foreach ($calls as $call) {
        $candidates = array_filter(
            $opCatalogue,
            fn ($o) => $o['method'] === $call['method'] && preg_match($o['pattern'], $call['pathname']) === 1
        );
        if (! $candidates) {
            continue;
        }
        usort($candidates, fn ($a, $b) => $a['params'] <=> $b['params']
            ?: strlen($b['template']) <=> strlen($a['template']));
        $reached[$candidates[0]['op']] = true;
    }
}

$missed = [];
foreach ($opCatalogue as $o) {
    if (! isset($reached[$o['op']])) {
        $missed[] = $o['op'];
    }
}
sort($missed);

// 4. Render.
$lines = [];
$lines[] = '### 🧪 Test coverage';
$lines[] = '';
if (! $httpTracked) {
    $lines[] = '> ⚠️ HTTP call tracking was not enabled (set `GR4VY_TRACK_HTTP=1` for the '
        .'test run), so endpoint reach could not be computed from observed requests.';
    $lines[] = '';
}
$total = count($opCatalogue);
$reachedCount = count($reached);
$reachPct = $total > 0 ? number_format($reachedCount / $total * 100, 1) : '0.0';
// When tracking was off we have no real reach data — render n/a rather than a
// misleading 0 / N (0.0%) that reads like a genuine result.
$reachValue = $httpTracked
    ? "{$reachedCount} / {$total} ({$reachPct}%)"
    : "n/a — tracking disabled ({$total} operations in catalogue)";
$lines[] = '| Metric | Value |';
$lines[] = '| --- | --- |';
$lines[] = "| **Endpoints reached (HTTP)** | {$reachValue} |";
$lines[] = '';
if ($httpTracked && $missed) {
    $lines[] = '> ⚠️ **'.count($missed).' endpoint operation(s) have no E2E test.** '
        .'Newly generated endpoints show up here — consider adding tests for them.';
    $lines[] = '';
    foreach ($missed as $name) {
        $lines[] = "- `{$name}`";
    }
} elseif ($httpTracked) {
    $lines[] = '✅ Every endpoint operation was reached by a real request.';
}
$lines[] = '';
// Relative links in PR comments resolve against the PR URL (e.g. /pull/123) and
// 404, so build an absolute blob URL from the CI env when available.
$repo = getenv('GITHUB_REPOSITORY') ?: '';
$ref = getenv('GITHUB_SHA') ?: 'main';
$testingLink = $repo !== ''
    ? "[TESTING.md](https://github.com/{$repo}/blob/{$ref}/TESTING.md)"
    : 'TESTING.md';
$lines[] = '<sub>Endpoint reach is measured from HTTP requests actually sent by the suite '
    ."(see Tests/Utils/TestEnvironment.php). See {$testingLink}.</sub>";

$markdown = implode("\n", $lines);
if (! is_dir($coverageDir)) {
    mkdir($coverageDir, 0775, true);
}
file_put_contents($coverageDir.'/endpoint-coverage.md', $markdown."\n");
echo $markdown."\n";
