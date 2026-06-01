<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Processing;

use Gr4vy\Tests\Utils\CheckoutFields;
use Gr4vy\Tests\Utils\Fixtures;
use Gr4vy\Tests\Utils\MerchantTestCase;
use Gr4vy\Tests\Utils\Reach;
use Gr4vy\TransactionUpdate;
use PHPUnit\Framework\Attributes\Test;

/**
 * Transactions resource: create/get/list/update plus the read sub-resources
 * (actions, events, settlements) and the cancel action. Capture / void / refund
 * / sync are covered as a story in {@see \Gr4vy\Tests\Flows\TransactionLifecycleTest}.
 */
final class TransactionsTest extends MerchantTestCase
{
    #[Test]
    public function create_get_list(): void
    {
        $sdk = $this->sdk();
        $txn = CheckoutFields::authorize($sdk);

        $fetched = $sdk->transactions->get($txn->id)->transaction;
        $this->assertSame($txn->id, $fetched->id);

        // list() is a lazy paginator — iterating it sends the request.
        $first = $this->firstOf($sdk->transactions->list());
        $this->assertNotNull($first);
    }

    #[Test]
    public function update_metadata_is_partial(): void
    {
        $sdk = $this->sdk();
        $txn = CheckoutFields::authorize($sdk);
        $ext = Fixtures::uniqueId('txn', $this->merchantAccountId());

        $updated = $sdk->transactions->update(
            new TransactionUpdate(
                externalIdentifier: $ext,
                metadata: ['source' => 'e2e', 'tier' => 'gold'],
            ),
            $txn->id,
        )->transaction;

        // The changed field took effect; the amount (untouched) is unchanged.
        $this->assertSame($ext, $updated->externalIdentifier);
        $this->assertSame($txn->amount, $updated->amount);
    }

    #[Test]
    public function read_subresources(): void
    {
        $sdk = $this->sdk();
        $txn = CheckoutFields::authorize($sdk);

        $actions = $sdk->transactions->actions->list($txn->id)->transactionActions;
        $this->assertNotNull($actions);

        // events.list() is a generator.
        $this->firstOf($sdk->transactions->events->list($txn->id));

        $settlements = $sdk->transactions->settlements->list($txn->id)->settlements;
        $this->assertNotNull($settlements);

        // A specific settlement needs a settled transaction we cannot force here.
        Reach::reaches(
            fn () => $sdk->transactions->settlements->get($txn->id, self::MISSING_ID),
            'transactions.settlements.get',
        );
    }

    #[Test]
    public function cancel_is_reached(): void
    {
        $sdk = $this->sdk();
        // Cancelling a not-found transaction still exercises the endpoint.
        Reach::reaches(
            fn () => $sdk->transactions->cancel(self::MISSING_ID),
            'transactions.cancel',
        );
    }
}
