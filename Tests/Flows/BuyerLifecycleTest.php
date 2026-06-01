<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Flows;

use Gr4vy\BuyerCreate;
use Gr4vy\CheckoutSessionCreate;
use Gr4vy\CheckoutSessionWithUrlPaymentMethodCreate;
use Gr4vy\ListBuyerPaymentMethodsRequest;
use Gr4vy\ShippingDetailsCreate;
use Gr4vy\Tests\Utils\CheckoutFields;
use Gr4vy\Tests\Utils\Fixtures;
use Gr4vy\Tests\Utils\MerchantTestCase;
use Gr4vy\TransactionCreate;
use PHPUnit\Framework\Attributes\Test;

/**
 * Buyer-centric story: create a buyer, store a card on it, add shipping details,
 * then reuse the stored method (via a checkout session) to authorize a payment.
 */
final class BuyerLifecycleTest extends MerchantTestCase
{
    #[Test]
    public function buyer_with_stored_method_and_shipping(): void
    {
        $sdk = $this->sdk();
        $ext = Fixtures::uniqueId('buyer', $this->merchantAccountId());

        // Create the buyer.
        $buyer = $sdk->buyers->create(new BuyerCreate(
            displayName: 'Jane Doe',
            externalIdentifier: $ext,
            billingDetails: Fixtures::sampleBillingDetails(),
        ))->buyer;
        $this->assertNotNull($buyer->id);
        $this->assertSame('Jane Doe', $buyer->displayName);

        // Store a card against the buyer.
        $pm = $sdk->paymentMethods->create(Fixtures::approvingCard(buyerId: $buyer->id))->paymentMethod;
        $this->assertNotNull($pm->id);

        // It shows up in the buyer's payment-method list.
        $list = $sdk->buyers->paymentMethods->list(
            new ListBuyerPaymentMethodsRequest(buyerId: $buyer->id)
        )->paymentMethodSummaries;
        $this->assertNotNull($list);

        // Add shipping details.
        $shipping = $sdk->buyers->shippingDetails->create(
            new ShippingDetailsCreate(
                firstName: 'Jane',
                lastName: 'Doe',
                emailAddress: 'jane@example.com',
                address: Fixtures::sampleAddress(),
            ),
            $buyer->id,
        )->shippingDetails;
        $this->assertSame('Jane', $shipping->firstName);

        // Reuse the stored method through a checkout session to authorize a payment.
        $session = $sdk->checkoutSessions->create(new CheckoutSessionCreate())->checkoutSession;
        CheckoutFields::putStoredMethod($session->id, $pm->id);
        $txn = $sdk->transactions->create(new TransactionCreate(
            amount: 1299,
            currency: 'USD',
            paymentMethod: new CheckoutSessionWithUrlPaymentMethodCreate(id: $session->id),
            buyerId: $buyer->id,
        ))->transaction;

        $this->assertSame('authorization_succeeded', $txn->status);
        $this->assertSame(1299, $txn->amount);
    }
}
