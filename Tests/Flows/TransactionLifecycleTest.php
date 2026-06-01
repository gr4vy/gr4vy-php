<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Flows;

use Gr4vy\CaptureTransactionRequest;
use Gr4vy\Tests\Utils\CheckoutFields;
use Gr4vy\Tests\Utils\MerchantTestCase;
use Gr4vy\Tests\Utils\Poll;
use Gr4vy\Tests\Utils\Reach;
use Gr4vy\Transaction;
use Gr4vy\TransactionCaptureCreate;
use Gr4vy\TransactionRefundAllCreate;
use PHPUnit\Framework\Attributes\Test;

/**
 * The headline merchant story: checkout → authorize → capture → refund, plus a
 * second transaction that is authorized then voided, plus sync. Asserts the
 * status transitions and amounts the way a real integrator would observe them.
 */
final class TransactionLifecycleTest extends MerchantTestCase
{
    #[Test]
    public function authorize_capture_refund(): void
    {
        $sdk = $this->sdk();

        // 1. Authorize via a checkout session + approving card.
        $txn = CheckoutFields::authorize($sdk, amount: 1299, currency: 'USD');
        $this->assertNotNull($txn->id);
        $this->assertSame('authorization_succeeded', $txn->status);
        $this->assertSame(1299, $txn->amount);

        // 2. Capture the full amount, then confirm it settles.
        $sdk->transactions->capture(new CaptureTransactionRequest(
            transactionId: $txn->id,
            transactionCaptureCreate: new TransactionCaptureCreate(amount: 1299),
        ));
        $captured = Poll::until(
            fn () => $sdk->transactions->get($txn->id)->transaction,
            fn (Transaction $t) => $t->capturedAmount === 1299,
            description: 'transaction captured',
        );
        $this->assertSame(1299, $captured->capturedAmount);

        // 3. Refund it in full, then confirm the refund lands.
        $full = $sdk->transactions->refunds->all->create(
            $txn->id,
            new TransactionRefundAllCreate(reason: 'customer request'),
        );
        $this->assertNotNull($full->refunds);
        $refunded = Poll::until(
            fn () => $sdk->transactions->get($txn->id)->transaction,
            fn (Transaction $t) => $t->refundedAmount === 1299,
            description: 'transaction refunded',
        );
        $this->assertSame(1299, $refunded->refundedAmount);
    }

    #[Test]
    public function authorize_then_void(): void
    {
        $sdk = $this->sdk();

        $txn = CheckoutFields::authorize($sdk, amount: 555, currency: 'USD');
        $this->assertSame('authorization_succeeded', $txn->status);

        // Void the (uncaptured) authorization.
        $sdk->transactions->void($txn->id);
        $voided = Poll::until(
            fn () => $sdk->transactions->get($txn->id)->transaction,
            fn (Transaction $t) => str_contains($t->status, 'void'),
            description: 'transaction voided',
        );
        $this->assertStringContainsString('void', $voided->status);
    }

    #[Test]
    public function sync_is_reached(): void
    {
        $sdk = $this->sdk();

        $txn = CheckoutFields::authorize($sdk, amount: 700, currency: 'USD');
        // The mock-card connector does not support sync, so the endpoint returns a
        // client error — assert it is reached rather than expecting a 2xx.
        Reach::reaches(fn () => $sdk->transactions->sync($txn->id), 'transactions.sync');
    }
}
