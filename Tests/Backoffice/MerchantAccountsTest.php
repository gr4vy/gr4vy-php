<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Backoffice;

use Gr4vy\MerchantAccountCreate;
use Gr4vy\MerchantAccountThreeDSConfigurationCreate;
use Gr4vy\MerchantAccountThreeDSConfigurationUpdate;
use Gr4vy\MerchantAccountUpdate;
use Gr4vy\Tests\Utils\MerchantTestCase;
use Gr4vy\Tests\Utils\Reach;
use Gr4vy\Tests\Utils\TestEnvironment;
use PHPUnit\Framework\Attributes\Test;

/**
 * Merchant accounts: create/get/update(partial)/list, plus the 3DS-configuration
 * sub-resource (create/update/delete reached at the request level — a real
 * configuration needs scheme acquirer credentials; list is a happy path).
 */
final class MerchantAccountsTest extends MerchantTestCase
{
    #[Test]
    public function crud_with_partial_update(): void
    {
        // Merchant-account operations are account-level, not merchant-scoped, so
        // drive them with an unscoped (admin) client.
        $sdk = TestEnvironment::createClient($this->merchant()->privateKey);
        $id = strtolower(bin2hex(random_bytes(8)));

        $created = $sdk->merchantAccounts->create(new MerchantAccountCreate(id: $id, displayName: 'Original'))->merchantAccount;
        $this->assertSame($id, $created->id);

        $fetched = $sdk->merchantAccounts->get($id)->merchantAccount;
        $this->assertSame($id, $fetched->id);

        // Partial update: change only displayName.
        $updated = $sdk->merchantAccounts->update(new MerchantAccountUpdate(displayName: 'Renamed'), $id)->merchantAccount;
        $this->assertSame('Renamed', $updated->displayName);
        $this->assertSame($id, $updated->id);

        $first = $this->firstOf($sdk->merchantAccounts->list());
        $this->assertNotNull($first);
    }

    #[Test]
    public function three_ds_configuration(): void
    {
        $sdk = $this->sdk();
        $mid = $this->merchantAccountId();

        // list is a happy path (empty until configured).
        $list = $sdk->merchantAccounts->threeDsConfiguration->list($mid)->merchantAccountThreeDSConfigurations;
        $this->assertNotNull($list);

        Reach::reaches(
            fn () => $sdk->merchantAccounts->threeDsConfiguration->create(
                new MerchantAccountThreeDSConfigurationCreate(
                    merchantAcquirerBin: '411111',
                    merchantAcquirerId: 'acq-1',
                    merchantName: 'Acme',
                    merchantCountryCode: 'US',
                    merchantCategoryCode: '5712',
                    merchantUrl: 'https://example.com',
                    scheme: 'visa',
                    metadata: [],
                ),
                $mid,
            ),
            'merchantAccounts.threeDsConfiguration.create',
        );
        Reach::reaches(
            fn () => $sdk->merchantAccounts->threeDsConfiguration->update(
                new MerchantAccountThreeDSConfigurationUpdate(),
                $mid,
                self::MISSING_ID,
            ),
            'merchantAccounts.threeDsConfiguration.update',
        );
        Reach::reaches(
            fn () => $sdk->merchantAccounts->threeDsConfiguration->delete($mid, self::MISSING_ID),
            'merchantAccounts.threeDsConfiguration.delete',
        );
    }
}
