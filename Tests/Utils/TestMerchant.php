<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Utils;

use Gr4vy\SDK;

/** Merchant-scoped client plus the identifiers a suite may need. */
final class TestMerchant
{
    public function __construct(
        public readonly SDK $client,
        public readonly string $merchantAccountId,
        public readonly string $privateKey,
    ) {}
}
