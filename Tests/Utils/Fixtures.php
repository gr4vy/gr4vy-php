<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Utils;

use Gr4vy\Address;
use Gr4vy\BillingDetails;
use Gr4vy\CardPaymentMethodCreate;
use Gr4vy\CartItem;

/**
 * Canonical inputs for the mock-card connector and reusable request shapes. The
 * mock connector approves 4111… with a future expiry; other inputs (documented
 * inline where used) drive decline/error paths.
 */
final class Fixtures
{
    // Approving test card for the mock-card service. Far-future expiry so the
    // suite does not start failing once a year ticks over.
    public const APPROVING_CARD_NUMBER = '4111111111111111';
    public const CARD_EXPIRATION_DATE = '12/35';
    public const CARD_SECURITY_CODE = '123';

    private static int $counter = 0;

    /**
     * Low-collision identifier: a caller-supplied scope (typically the per-class
     * random merchant id) plus a monotonic per-process counter. The counter makes
     * ids unique within a run; the scope keeps ids from different merchants/shards
     * apart. Not a hard guarantee (the merchant id itself is random), but
     * collisions are vanishingly unlikely.
     */
    public static function uniqueId(string $prefix, string $scope): string
    {
        $n = ++self::$counter;
        $shortScope = substr($scope, 0, 8);

        return "{$prefix}-{$shortScope}-{$n}";
    }

    public static function approvingCard(?string $externalIdentifier = null, ?string $buyerId = null): CardPaymentMethodCreate
    {
        return new CardPaymentMethodCreate(
            expirationDate: self::CARD_EXPIRATION_DATE,
            number: self::APPROVING_CARD_NUMBER,
            buyerId: $buyerId,
            externalIdentifier: $externalIdentifier,
            securityCode: self::CARD_SECURITY_CODE,
        );
    }

    public static function sampleAddress(): Address
    {
        return new Address(
            city: 'London',
            country: 'GB',
            postalCode: '789',
            state: 'London',
            houseNumberOrName: '10',
            line1: 'Oxford Street',
        );
    }

    public static function sampleBillingDetails(): BillingDetails
    {
        return new BillingDetails(
            firstName: 'John',
            lastName: 'Lunn',
            emailAddress: 'john@example.com',
            address: self::sampleAddress(),
        );
    }

    public static function sampleCartItem(string $name = 'T-Shirt'): CartItem
    {
        return new CartItem(name: $name, quantity: 1, unitAmount: 1299);
    }
}
