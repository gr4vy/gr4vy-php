<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Processing;

use Gr4vy\PaymentLinkCreate;
use Gr4vy\Tests\Utils\Fixtures;
use Gr4vy\Tests\Utils\MerchantTestCase;
use PHPUnit\Framework\Attributes\Test;

/**
 * Payment links: create → get → list → expire (a full happy-path lifecycle).
 */
final class PaymentLinksTest extends MerchantTestCase
{
    #[Test]
    public function create_get_list_expire(): void
    {
        $sdk = $this->sdk();
        $ext = Fixtures::uniqueId('link', $this->merchantAccountId());

        $link = $sdk->paymentLinks->create(new PaymentLinkCreate(
            amount: 1299,
            country: 'US',
            currency: 'USD',
            externalIdentifier: $ext,
        ))->paymentLink;
        $this->assertNotNull($link->id);

        $fetched = $sdk->paymentLinks->get($link->id)->paymentLink;
        $this->assertSame($link->id, $fetched->id);

        $first = $this->firstOf($sdk->paymentLinks->list());
        $this->assertNotNull($first);

        // expire() may return no body; confirm the call succeeds and the link
        // is still retrievable afterwards.
        $sdk->paymentLinks->expire($link->id);
        $afterExpire = $sdk->paymentLinks->get($link->id)->paymentLink;
        $this->assertSame($link->id, $afterExpire->id);
    }
}
