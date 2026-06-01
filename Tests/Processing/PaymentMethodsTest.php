<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Processing;

use Gr4vy\ListPaymentMethodsRequest;
use Gr4vy\NetworkTokenCreate;
use Gr4vy\PaymentMethodUpdate;
use Gr4vy\PaymentServiceTokenCreate;
use Gr4vy\Tests\Utils\Fixtures;
use Gr4vy\Tests\Utils\MerchantTestCase;
use Gr4vy\Tests\Utils\Reach;
use PHPUnit\Framework\Attributes\Test;

/**
 * Payment methods: full CRUD with a partial-update invariant, list, plus the
 * network-token and payment-service-token sub-resources (reached at the request
 * level — they need async network tokens / a live PSP which the mock env lacks).
 */
final class PaymentMethodsTest extends MerchantTestCase
{
    #[Test]
    public function crud_with_partial_update(): void
    {
        $sdk = $this->sdk();
        $ext = Fixtures::uniqueId('pm', $this->merchantAccountId());

        $created = $sdk->paymentMethods->create(Fixtures::approvingCard(externalIdentifier: $ext))->paymentMethod;
        $this->assertNotNull($created->id);
        $this->assertSame('card', $created->method);

        $fetched = $sdk->paymentMethods->get($created->id)->paymentMethod;
        $this->assertSame($created->id, $fetched->id);

        // Partial update: change only the expiration date.
        $updated = $sdk->paymentMethods->update(
            new PaymentMethodUpdate(expirationDate: '10/40'),
            $created->id,
        )->paymentMethod;
        $this->assertSame('10/40', $updated->expirationDate);
        // Untouched fields are preserved.
        $this->assertSame($created->id, $updated->id);
        $this->assertSame('card', $updated->method);

        $first = $this->firstOf($sdk->paymentMethods->list(new ListPaymentMethodsRequest()));
        $this->assertNotNull($first);

        $sdk->paymentMethods->delete($created->id);
    }

    #[Test]
    public function network_tokens_are_reached(): void
    {
        $sdk = $this->sdk();
        $pm = $sdk->paymentMethods->create(Fixtures::approvingCard())->paymentMethod;

        Reach::reaches(
            fn () => $sdk->paymentMethods->networkTokens->create(
                new NetworkTokenCreate(merchantInitiated: false, isSubsequentPayment: false),
                $pm->id,
            ),
            'paymentMethods.networkTokens.create',
        );
        Reach::reaches(
            fn () => $sdk->paymentMethods->networkTokens->list($pm->id),
            'paymentMethods.networkTokens.list',
        );
        Reach::reaches(
            fn () => $sdk->paymentMethods->networkTokens->suspend($pm->id, self::MISSING_ID),
            'paymentMethods.networkTokens.suspend',
        );
        Reach::reaches(
            fn () => $sdk->paymentMethods->networkTokens->resume($pm->id, self::MISSING_ID),
            'paymentMethods.networkTokens.resume',
        );
        Reach::reaches(
            fn () => $sdk->paymentMethods->networkTokens->delete($pm->id, self::MISSING_ID),
            'paymentMethods.networkTokens.delete',
        );
    }

    #[Test]
    public function payment_service_tokens_are_reached(): void
    {
        $sdk = $this->sdk();
        $pm = $sdk->paymentMethods->create(Fixtures::approvingCard())->paymentMethod;

        Reach::reaches(
            fn () => $sdk->paymentMethods->paymentServiceTokens->create(
                new PaymentServiceTokenCreate(
                    paymentServiceId: self::MISSING_ID,
                    redirectUrl: 'https://example.com/return',
                ),
                $pm->id,
            ),
            'paymentMethods.paymentServiceTokens.create',
        );
        Reach::reaches(
            fn () => $sdk->paymentMethods->paymentServiceTokens->list($pm->id),
            'paymentMethods.paymentServiceTokens.list',
        );
        Reach::reaches(
            fn () => $sdk->paymentMethods->paymentServiceTokens->delete($pm->id, self::MISSING_ID),
            'paymentMethods.paymentServiceTokens.delete',
        );
    }
}
