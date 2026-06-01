<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Processing;

use Gr4vy\CaptureTransactionRequest;
use Gr4vy\Refund;
use Gr4vy\Tests\Utils\CheckoutFields;
use Gr4vy\Tests\Utils\MerchantTestCase;
use Gr4vy\Tests\Utils\Poll;
use Gr4vy\Tests\Utils\Reach;
use Gr4vy\Transaction;
use Gr4vy\TransactionCaptureCreate;
use Gr4vy\TransactionRefundCreate;
use PHPUnit\Framework\Attributes\Test;

/**
 * Refunds: a partial refund on a captured transaction (create → get → list),
 * plus the top-level refunds.get lookup.
 */
final class RefundsTest extends MerchantTestCase
{
    #[Test]
    public function partial_refund_create_get_list(): void
    {
        $sdk = $this->sdk();

        // Authorize + capture so the transaction is refundable.
        $txn = CheckoutFields::authorize($sdk, amount: 2000);
        $sdk->transactions->capture(new CaptureTransactionRequest(
            transactionId: $txn->id,
            transactionCaptureCreate: new TransactionCaptureCreate(amount: 2000),
        ));
        Poll::until(
            fn () => $sdk->transactions->get($txn->id)->transaction,
            fn (Transaction $t) => $t->capturedAmount === 2000,
            description: 'transaction captured before refund',
        );

        // Partial refund.
        $refund = $sdk->transactions->refunds->create(
            new TransactionRefundCreate(amount: 500, reason: 'partial'),
            $txn->id,
        )->refund;
        $this->assertNotNull($refund->id);

        $fetched = $sdk->transactions->refunds->get($txn->id, $refund->id)->refund;
        $this->assertSame($refund->id, $fetched->id);

        $list = $sdk->transactions->refunds->list($txn->id)->refunds;
        $this->assertNotNull($list);

        // Top-level refund lookup.
        $top = $sdk->refunds->get($refund->id)->refund;
        $this->assertInstanceOf(Refund::class, $top);
        $this->assertSame($refund->id, $top->id);
    }

    #[Test]
    public function refund_get_missing_is_reached(): void
    {
        $sdk = $this->sdk();
        Reach::reaches(fn () => $sdk->refunds->get(self::MISSING_ID), 'refunds.get');
    }
}
