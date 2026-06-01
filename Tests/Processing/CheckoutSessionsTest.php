<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Processing;

use Gr4vy\CheckoutSessionCreate;
use Gr4vy\CheckoutSessionWithUrlPaymentMethodCreate;
use Gr4vy\Tests\Utils\CheckoutFields;
use Gr4vy\Tests\Utils\Fixtures;
use Gr4vy\Tests\Utils\MerchantTestCase;
use Gr4vy\TransactionCreate;
use PHPUnit\Framework\Attributes\Test;

/**
 * Checkout sessions: full CRUD (create/get/update/delete) plus the two headline
 * field-attachment flows — raw card details and a stored payment method — each
 * driven through to an authorized transaction.
 */
final class CheckoutSessionsTest extends MerchantTestCase
{
    #[Test]
    public function crud(): void
    {
        $sdk = $this->sdk();

        $session = $sdk->checkoutSessions->create(new CheckoutSessionCreate())->checkoutSession;
        $this->assertNotNull($session->id);

        $fetched = $sdk->checkoutSessions->get($session->id)->checkoutSession;
        $this->assertSame($session->id, $fetched->id);

        $updated = $sdk->checkoutSessions->update(
            new CheckoutSessionCreate(metadata: ['source' => 'e2e']),
            $session->id,
        )->checkoutSession;
        $this->assertSame($session->id, $updated->id);

        $sdk->checkoutSessions->delete($session->id);
        $this->addToAssertionCount(1);
    }

    #[Test]
    public function authorize_with_raw_card(): void
    {
        $sdk = $this->sdk();
        $txn = CheckoutFields::authorize($sdk, amount: 1299);
        $this->assertSame('authorization_succeeded', $txn->status);
        $this->assertSame(1299, $txn->amount);
    }

    #[Test]
    public function authorize_with_stored_method(): void
    {
        $sdk = $this->sdk();

        $pm = $sdk->paymentMethods->create(Fixtures::approvingCard())->paymentMethod;
        $session = $sdk->checkoutSessions->create(new CheckoutSessionCreate())->checkoutSession;
        CheckoutFields::putStoredMethod($session->id, $pm->id);

        $txn = $sdk->transactions->create(new TransactionCreate(
            amount: 1299,
            currency: 'USD',
            paymentMethod: new CheckoutSessionWithUrlPaymentMethodCreate(id: $session->id),
        ))->transaction;

        $this->assertSame('authorization_succeeded', $txn->status);
    }
}
