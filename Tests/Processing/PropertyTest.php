<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Processing;

use Gr4vy\Tests\Utils\CheckoutFields;
use Gr4vy\Tests\Utils\Gen;
use Gr4vy\Tests\Utils\MerchantTestCase;
use Gr4vy\TransactionUpdate;
use PHPUnit\Framework\Attributes\Test;

/**
 * Property-based ("uncertainty") tests — the local analogue of fast-check /
 * hypothesis / FsCheck. Each property explores {@see Gen::RUNS} generated cases
 * from a fixed seed (FC_SEED), so failures are reproducible. Bounded run counts
 * keep the cost against the live sandbox low.
 */
final class PropertyTest extends MerchantTestCase
{
    /** Any accepted amount/currency authorizes and the response echoes them back. */
    #[Test]
    public function amount_and_currency_are_echoed(): void
    {
        $sdk = $this->sdk();
        for ($i = 0; $i < Gen::RUNS; $i++) {
            $amount = Gen::amount();
            $currency = Gen::currency();
            $txn = CheckoutFields::authorize($sdk, amount: $amount, currency: $currency);
            $this->assertSame($amount, $txn->amount, "amount echo (run {$i})");
            $this->assertSame($currency, $txn->currency, "currency echo (run {$i})");
            $this->assertSame('authorization_succeeded', $txn->status);
        }
    }

    /** Arbitrary mixed-case metadata survives create → update → get unchanged. */
    #[Test]
    public function metadata_round_trips(): void
    {
        $sdk = $this->sdk();
        $txn = CheckoutFields::authorize($sdk);

        for ($i = 0; $i < Gen::RUNS; $i++) {
            $metadata = Gen::metadata();
            $updated = $sdk->transactions->update(
                new TransactionUpdate(metadata: $metadata),
                $txn->id,
            )->transaction;

            foreach ($metadata as $key => $value) {
                $this->assertArrayHasKey($key, $updated->metadata ?? [], "metadata key '{$key}' (run {$i})");
                $this->assertSame($value, ($updated->metadata ?? [])[$key], "metadata value for '{$key}' (run {$i})");
            }
        }
    }
}
