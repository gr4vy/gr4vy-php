<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Processing;

use Gr4vy\GiftCardActivationCreate;
use Gr4vy\GiftCardBalanceRequest;
use Gr4vy\GiftCardCreate;
use Gr4vy\GiftCardIssuanceCreate;
use Gr4vy\GiftCardRequest;
use Gr4vy\ListGiftCardsRequest;
use Gr4vy\Tests\Utils\MerchantTestCase;
use Gr4vy\Tests\Utils\Reach;
use PHPUnit\Framework\Attributes\Test;

/**
 * Gift cards. The mock merchant has no gift-card service configured, so create /
 * balances / activations / issuances are reached at the request level (they
 * cleanly 4xx); list is a real happy path (it returns an empty page).
 */
final class GiftCardsTest extends MerchantTestCase
{
    #[Test]
    public function list_is_happy_path(): void
    {
        $sdk = $this->sdk();
        // Empty page is fine — iterating still sends the request.
        $this->firstOf($sdk->giftCards->list(new ListGiftCardsRequest()));
        $this->addToAssertionCount(1);
    }

    #[Test]
    public function create_get_delete_balances_are_reached(): void
    {
        $sdk = $this->sdk();

        Reach::reaches(
            fn () => $sdk->giftCards->create(new GiftCardCreate(number: '4111111111111111', pin: '1234')),
            'giftCards.create',
        );
        Reach::reaches(fn () => $sdk->giftCards->get(self::MISSING_ID), 'giftCards.get');
        Reach::reaches(fn () => $sdk->giftCards->delete(self::MISSING_ID), 'giftCards.delete');
        Reach::reaches(
            fn () => $sdk->giftCards->balances->list(
                new GiftCardBalanceRequest(items: [new GiftCardRequest(number: '4111111111111111', pin: '1234')])
            ),
            'giftCards.balances.list',
        );
    }

    #[Test]
    public function activation_is_reached(): void
    {
        $sdk = $this->sdk();

        // Activating a gift card needs a configured gift-card service.
        Reach::reaches(
            fn () => $sdk->giftCards->activations->create(new GiftCardActivationCreate(
                number: '4111111111111111',
                pin: '1234',
                amount: 1299,
                currency: 'USD',
            )),
            'giftCards.activations.create',
        );
    }

    #[Test]
    public function issuance_is_reached(): void
    {
        $sdk = $this->sdk();

        // Issuing a gift card needs a configured gift-card service with a theme.
        Reach::reaches(
            fn () => $sdk->giftCards->issuances->create(new GiftCardIssuanceCreate(
                theme: 'default',
                amount: 1299,
                currency: 'USD',
            )),
            'giftCards.issuances.create',
        );
    }
}
