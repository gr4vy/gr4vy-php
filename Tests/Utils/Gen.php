<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Utils;

/**
 * Lightweight, seeded generators for property-based ("uncertainty") testing —
 * the local analogue of fast-check / hypothesis / FsCheck. We avoid an external
 * dependency (e.g. eris) so the suite stays hermetic and cannot be broken by a
 * transitive constraint clash with roave/security-advisories; in exchange this
 * is deliberately small: a fixed seed (FC_SEED, default 1337) and a bounded run
 * count keep property tests reproducible and cheap against the live sandbox.
 *
 * Every generator draws from mt_rand after a one-time srand, so a given seed
 * always yields the same sequence across a run.
 */
final class Gen
{
    /** Number of cases each property explores. Kept low for live-E2E cost. */
    public const RUNS = 6;

    private static bool $seeded = false;

    public static function seed(): void
    {
        if (! self::$seeded) {
            // Don't use `?:` — it would treat a valid FC_SEED=0 as falsey.
            $env = getenv('FC_SEED');
            $seed = ($env === false || $env === '') ? 1337 : (int) $env;
            mt_srand($seed);
            self::$seeded = true;
        }
    }

    /** Minor-unit amount in a range the mock-card connector accepts. */
    public static function amount(): int
    {
        self::seed();

        return mt_rand(50, 100000);
    }

    /** @return 'USD' — the only currency the mock service accepts here. */
    public static function currency(): string
    {
        self::seed();

        return 'USD';
    }

    /** Metadata mixing camelCase and snake_case keys (exercises the key boundary). */
    public static function metadata(): array
    {
        self::seed();
        $out = [];
        $n = mt_rand(1, 3);
        for ($i = 0; $i < $n; $i++) {
            $camel = 'camelKey'.mt_rand(0, 9999);
            $snake = 'snake_key_'.mt_rand(0, 9999);
            $out[$camel] = 'v'.mt_rand(0, 9999);
            $out[$snake] = 'v'.mt_rand(0, 9999);
        }

        return $out;
    }

    public static function displayName(): string
    {
        self::seed();
        $words = ['Acme', 'Globex', 'Initech', 'Umbrella', 'Soylent', 'Hooli', 'Stark', 'Wayne'];

        return $words[mt_rand(0, count($words) - 1)].' '.mt_rand(100, 999);
    }
}
