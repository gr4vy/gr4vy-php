// Summarises endpoint reach for the PR comment.
//
// Reach is computed from *observed HTTP calls*, not code coverage: the test HTTP
// client (Tests/Utils/TestEnvironment.php, gated on GR4VY_TRACK_HTTP) logs the
// method + path of every request to coverage/http/*.jsonl. We build the operation
// catalogue from the generated resource classes (src/*.php) by pairing each
// `Utils\Utils::generateUrl($baseUrl, '<template>'...)` with the HTTP method of the
// `new \GuzzleHttp\Psr7\Request('<METHOD>', $url)` that follows it, then mark an
// operation reached only if a matching request was actually sent — so an operation
// that fails local validation before issuing a request does not count.
//
// Writes coverage/endpoint-coverage.md (for the PR comment) and prints it.
// Exits 0 always — this is a report, not a gate.
import { mkdirSync, readdirSync, readFileSync, writeFileSync } from "node:fs";
import { join } from "node:path";

const COVERAGE_DIR = "coverage";
const SDK_DIR = "src";

// 1. Build the operation catalogue from the generated resource classes.
//    Each operation looks like:
//      $url = Utils\Utils::generateUrl($baseUrl, '/transactions/{transaction_id}', $request);
//      ... $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
const TEMPLATE_RE = /generateUrl\(\s*\$baseUrl\s*,\s*'([^']+)'/g;
const METHOD_RE =
  /new\s+\\?GuzzleHttp\\Psr7\\Request\(\s*'(GET|POST|PUT|PATCH|DELETE)'/i;

const opCatalogue = [];
const seen = new Set();
for (const file of readdirSync(SDK_DIR).filter((f) => f.endsWith(".php"))) {
  const src = readFileSync(join(SDK_DIR, file), "utf8");
  let m;
  while ((m = TEMPLATE_RE.exec(src)) !== null) {
    const template = m[1];
    if (!template || !template.startsWith("/")) continue;
    // Find the HTTP method that follows this generateUrl assignment.
    const after = src.slice(m.index, m.index + 2000);
    const methodMatch = after.match(METHOD_RE);
    if (!methodMatch) continue;
    const method = methodMatch[1].toUpperCase();
    const key = `${method} ${template}`;
    if (seen.has(key)) continue;
    seen.add(key);
    const regex = new RegExp(
      "^" + template.replace(/\{[^/}]+\}/g, "[^/]+").replace(/\//g, "\\/") + "$"
    );
    const params = (template.match(/\{[^/}]+\}/g) ?? []).length;
    opCatalogue.push({ op: key, method, template, regex, params });
  }
}

// 2. Load observed HTTP calls (per-process files).
let calls = [];
try {
  const dir = join(COVERAGE_DIR, "http");
  for (const f of readdirSync(dir).filter((f) => f.endsWith(".jsonl"))) {
    for (const line of readFileSync(join(dir, f), "utf8").split("\n")) {
      if (!line.trim()) continue;
      try {
        calls.push(JSON.parse(line));
      } catch {
        // ignore malformed/truncated line
      }
    }
  }
} catch {
  // no logs — tracking was not enabled for this run
}

const httpTracked = calls.length > 0;

// 3. Match calls to operations — most-specific template wins (fewest path
//    params, then longest template) so /buyers/gift-cards is not miscredited to
//    /buyers/{buyer_id}.
const reached = new Set();
if (httpTracked) {
  for (const { method, pathname } of calls) {
    const op = opCatalogue
      .filter((o) => o.method === method && o.regex.test(pathname))
      .sort((a, b) => a.params - b.params || b.template.length - a.template.length)[0];
    if (op) reached.add(op.op);
  }
}

const missed = opCatalogue
  .map((o) => o.op)
  .filter((op) => !reached.has(op))
  .sort();

// 4. Render.
const lines = [];
lines.push("### 🧪 Test coverage");
lines.push("");
if (!httpTracked) {
  lines.push(
    "> ⚠️ HTTP call tracking was not enabled (set `GR4VY_TRACK_HTTP=1` for the " +
      "test run), so endpoint reach could not be computed from observed requests."
  );
  lines.push("");
}
const reachPct = opCatalogue.length
  ? ((reached.size / opCatalogue.length) * 100).toFixed(1)
  : "0.0";
lines.push("| Metric | Value |");
lines.push("| --- | --- |");
lines.push(
  `| **Endpoints reached (HTTP)** | ${reached.size} / ${opCatalogue.length} (${reachPct}%) |`
);
lines.push("");
if (httpTracked && missed.length) {
  lines.push(
    `> ⚠️ **${missed.length} endpoint operation(s) have no E2E test.** ` +
      `Newly generated endpoints show up here — consider adding tests for them.`
  );
  lines.push("");
  for (const name of missed) lines.push(`- \`${name}\``);
} else if (httpTracked) {
  lines.push("✅ Every endpoint operation was reached by a real request.");
}
lines.push("");
lines.push(
  "<sub>Endpoint reach is measured from HTTP requests actually sent by the suite " +
    "(see Tests/Utils/TestEnvironment.php). See [TESTING.md](../TESTING.md).</sub>"
);

const markdown = lines.join("\n");
mkdirSync(COVERAGE_DIR, { recursive: true });
writeFileSync(join(COVERAGE_DIR, "endpoint-coverage.md"), markdown + "\n");
console.log(markdown);
