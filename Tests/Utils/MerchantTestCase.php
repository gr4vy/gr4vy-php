<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Utils;

use Gr4vy\SDK;
use PHPUnit\Framework\TestCase;

/**
 * Base class for E2E suites. Provisions ONE isolated merchant account (+ mock-card
 * service) per test class in `setUpBeforeClass()` and exposes a merchant-scoped
 * {@see SDK} client via `$this->sdk()`. Per-class isolation is what makes the
 * suite safe to run in parallel across CI shards.
 */
abstract class MerchantTestCase extends TestCase
{
    /** A non-existent UUID for "reach the endpoint, expect a 404" probes. */
    protected const MISSING_ID = '11111111-1111-1111-1111-111111111111';

    private static ?TestMerchant $merchant = null;

    public static function setUpBeforeClass(): void
    {
        self::$merchant = TestEnvironment::setupMerchant();
    }

    public static function tearDownAfterClass(): void
    {
        self::$merchant = null;
    }

    protected function merchant(): TestMerchant
    {
        if (self::$merchant === null) {
            self::$merchant = TestEnvironment::setupMerchant();
        }

        return self::$merchant;
    }

    protected function sdk(): SDK
    {
        return $this->merchant()->client;
    }

    protected function merchantAccountId(): string
    {
        return $this->merchant()->merchantAccountId;
    }

    /**
     * Trigger a paginated `list()` generator so a real HTTP request is sent (the
     * generator is lazy: nothing happens until it is iterated). Returns the first
     * page item, or null if the list is empty.
     */
    protected function firstOf(\Generator $gen): mixed
    {
        foreach ($gen as $item) {
            return $item;
        }

        return null;
    }
}
