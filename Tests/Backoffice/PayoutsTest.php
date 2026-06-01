<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Backoffice;

use Gr4vy\PaymentMethodStoredCard;
use Gr4vy\PayoutCreate;
use Gr4vy\Tests\Utils\Fixtures;
use Gr4vy\Tests\Utils\MerchantTestCase;
use Gr4vy\Tests\Utils\Reach;
use PHPUnit\Framework\Attributes\Test;

/**
 * Payouts: list is a happy path; create/get need a payout-capable payment
 * service the mock env does not provide, so they are reached at the request level.
 */
final class PayoutsTest extends MerchantTestCase
{
    #[Test]
    public function list_is_happy_path(): void
    {
        $sdk = $this->sdk();
        $this->firstOf($sdk->payouts->list());
        $this->addToAssertionCount(1);
    }

    #[Test]
    public function create_get_are_reached(): void
    {
        $sdk = $this->sdk();
        $pm = $sdk->paymentMethods->create(Fixtures::approvingCard())->paymentMethod;

        Reach::reaches(
            fn () => $sdk->payouts->create(new PayoutCreate(
                amount: 1000,
                currency: 'USD',
                paymentServiceId: self::MISSING_ID,
                paymentMethod: new PaymentMethodStoredCard(id: $pm->id),
            )),
            'payouts.create',
        );
        Reach::reaches(fn () => $sdk->payouts->get(self::MISSING_ID), 'payouts.get');
    }
}
