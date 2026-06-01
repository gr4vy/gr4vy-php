<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Processing;

use Gr4vy\BuyerCreate;
use Gr4vy\BuyerUpdate;
use Gr4vy\ListBuyerGiftCardsRequest;
use Gr4vy\ListBuyerPaymentMethodsRequest;
use Gr4vy\ListBuyersRequest;
use Gr4vy\ShippingDetailsCreate;
use Gr4vy\ShippingDetailsUpdate;
use Gr4vy\Tests\Utils\Fixtures;
use Gr4vy\Tests\Utils\MerchantTestCase;
use PHPUnit\Framework\Attributes\Test;

/**
 * Buyers: CRUD with a partial-update invariant, list, the shipping-details
 * sub-resource CRUD, and the gift-cards / payment-methods list sub-resources.
 */
final class BuyersTest extends MerchantTestCase
{
    #[Test]
    public function crud_with_partial_update(): void
    {
        $sdk = $this->sdk();
        $ext = Fixtures::uniqueId('buyer', $this->merchantAccountId());

        $buyer = $sdk->buyers->create(new BuyerCreate(
            displayName: 'Original Name',
            externalIdentifier: $ext,
        ))->buyer;
        $this->assertNotNull($buyer->id);

        $fetched = $sdk->buyers->get($buyer->id)->buyer;
        $this->assertSame($buyer->id, $fetched->id);

        // Partial update: change only displayName.
        $updated = $sdk->buyers->update(
            new BuyerUpdate(displayName: 'Renamed Buyer'),
            $buyer->id,
        )->buyer;
        $this->assertSame('Renamed Buyer', $updated->displayName);
        // externalIdentifier (untouched) is preserved.
        $this->assertSame($ext, $updated->externalIdentifier);

        $first = $this->firstOf($sdk->buyers->list(new ListBuyersRequest()));
        $this->assertNotNull($first);

        $sdk->buyers->delete($buyer->id);
    }

    #[Test]
    public function shipping_details_crud(): void
    {
        $sdk = $this->sdk();
        $buyer = $sdk->buyers->create(new BuyerCreate(displayName: 'Ships A Lot'))->buyer;

        $created = $sdk->buyers->shippingDetails->create(
            new ShippingDetailsCreate(
                firstName: 'Ada',
                lastName: 'Lovelace',
                address: Fixtures::sampleAddress(),
            ),
            $buyer->id,
        )->shippingDetails;
        $this->assertSame('Ada', $created->firstName);

        $fetched = $sdk->buyers->shippingDetails->get($buyer->id, $created->id)->shippingDetails;
        $this->assertSame($created->id, $fetched->id);

        $list = $sdk->buyers->shippingDetails->list($buyer->id)->shippingDetailsList;
        $this->assertNotNull($list);

        // Partial update: change only lastName.
        $updated = $sdk->buyers->shippingDetails->update(
            new ShippingDetailsUpdate(lastName: 'Byron'),
            $buyer->id,
            $created->id,
        )->shippingDetails;
        $this->assertSame('Byron', $updated->lastName);
        $this->assertSame('Ada', $updated->firstName);

        $sdk->buyers->shippingDetails->delete($buyer->id, $created->id);
    }

    #[Test]
    public function buyer_list_subresources(): void
    {
        $sdk = $this->sdk();
        $buyer = $sdk->buyers->create(new BuyerCreate(displayName: 'List Owner'))->buyer;

        $giftCards = $sdk->buyers->giftCards->list(
            new ListBuyerGiftCardsRequest(buyerId: $buyer->id)
        )->giftCardSummaries;
        $this->assertNotNull($giftCards);

        $paymentMethods = $sdk->buyers->paymentMethods->list(
            new ListBuyerPaymentMethodsRequest(buyerId: $buyer->id)
        )->paymentMethodSummaries;
        $this->assertNotNull($paymentMethods);
    }
}
