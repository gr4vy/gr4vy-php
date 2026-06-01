<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Utils;

/**
 * Bounded polling for eventually-consistent reads (capture settling, report
 * execution finishing, payout/settlement appearing). Hard-capped so a stuck
 * state fails fast rather than hanging a worker.
 */
final class Poll
{
    /**
     * @template T
     *
     * @param  callable():T  $fetch
     * @param  callable(T):bool  $predicate
     * @return T
     */
    public static function until(
        callable $fetch,
        callable $predicate,
        int $timeoutMs = 20000,
        int $intervalMs = 1000,
        ?string $description = null
    ): mixed {
        $deadline = microtime(true) + ($timeoutMs / 1000);
        $last = null;
        while (microtime(true) < $deadline) {
            $last = $fetch();
            if ($predicate($last)) {
                return $last;
            }
            usleep($intervalMs * 1000);
        }
        throw new \RuntimeException(
            "Poll::until timed out after {$timeoutMs}ms"
            .($description !== null ? " waiting for: {$description}" : '')
        );
    }
}
