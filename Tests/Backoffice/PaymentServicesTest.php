<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Backoffice;

use Gr4vy\Field;
use Gr4vy\ListPaymentServicesRequest;
use Gr4vy\PaymentOptionRequest;
use Gr4vy\PaymentServiceCreate;
use Gr4vy\PaymentServiceUpdate;
use Gr4vy\Tests\Utils\MerchantTestCase;
use Gr4vy\Tests\Utils\Reach;
use Gr4vy\VerifyCredentials;
use PHPUnit\Framework\Attributes\Test;

/**
 * Payment services: create/get/update(partial)/list/delete + verify + session,
 * plus the definitions, payment-options and card-scheme-definitions read
 * sub-resources.
 */
final class PaymentServicesTest extends MerchantTestCase
{
    private function newService(): PaymentServiceCreate
    {
        return new PaymentServiceCreate(
            displayName: 'Secondary service',
            paymentServiceDefinitionId: 'mock-card',
            fields: [new Field(key: 'merchant_id', value: 'test')],
            acceptedCurrencies: ['USD'],
            acceptedCountries: ['US'],
            active: true,
        );
    }

    #[Test]
    public function crud_with_partial_update(): void
    {
        $sdk = $this->sdk();

        $created = $sdk->paymentServices->create($this->newService())->paymentService;
        $this->assertNotNull($created->id);
        $this->assertSame('Secondary service', $created->displayName);

        $fetched = $sdk->paymentServices->get($created->id)->paymentService;
        $this->assertSame($created->id, $fetched->id);

        // Partial update: change only displayName.
        $updated = $sdk->paymentServices->update(
            new PaymentServiceUpdate(displayName: 'Renamed service'),
            $created->id,
        )->paymentService;
        $this->assertSame('Renamed service', $updated->displayName);
        // Accepted currencies (untouched) are preserved.
        $this->assertSame(['USD'], $updated->acceptedCurrencies);

        $first = $this->firstOf($sdk->paymentServices->list(new ListPaymentServicesRequest()));
        $this->assertNotNull($first);

        $sdk->paymentServices->delete($created->id);
        $this->addToAssertionCount(1);
    }

    #[Test]
    public function verify_and_session_are_reached(): void
    {
        $sdk = $this->sdk();
        $created = $sdk->paymentServices->create($this->newService())->paymentService;

        Reach::reaches(
            fn () => $sdk->paymentServices->verify(new VerifyCredentials(
                paymentServiceDefinitionId: 'mock-card',
                fields: [new Field(key: 'merchant_id', value: 'test')],
            )),
            'paymentServices.verify',
        );
        Reach::reaches(
            fn () => $sdk->paymentServices->session([], $created->id),
            'paymentServices.session',
        );
    }

    #[Test]
    public function read_sidecars(): void
    {
        $sdk = $this->sdk();

        // Definitions: list (generator) + get + session (reached).
        $def = $this->firstOf($sdk->paymentServiceDefinitions->list());
        $this->assertNotNull($def);

        $mockCard = $sdk->paymentServiceDefinitions->get('mock-card')->paymentServiceDefinition;
        $this->assertNotNull($mockCard);

        Reach::reaches(
            fn () => $sdk->paymentServiceDefinitions->session([], 'mock-card'),
            'paymentServiceDefinitions.session',
        );

        // Payment options + card-scheme definitions: happy paths.
        $options = $sdk->paymentOptions->list(new PaymentOptionRequest(country: 'US', currency: 'USD', amount: 1299))->paymentOptions;
        $this->assertNotNull($options);

        $schemes = $sdk->cardSchemeDefinitions->list()->cardSchemeDefinitions;
        $this->assertNotNull($schemes);
    }
}
