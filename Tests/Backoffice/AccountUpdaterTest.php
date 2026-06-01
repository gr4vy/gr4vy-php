<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Backoffice;

use Gr4vy\AccountUpdaterJobCreate;
use Gr4vy\Tests\Utils\Fixtures;
use Gr4vy\Tests\Utils\MerchantTestCase;
use Gr4vy\Tests\Utils\Reach;
use PHPUnit\Framework\Attributes\Test;

/**
 * Account updater: submitting a job needs the account-updater feature enabled on
 * the merchant (and an encryption key), which the mock env lacks — so the job
 * create is reached at the request level.
 */
final class AccountUpdaterTest extends MerchantTestCase
{
    #[Test]
    public function jobs_create_is_reached(): void
    {
        $sdk = $this->sdk();
        $pm = $sdk->paymentMethods->create(Fixtures::approvingCard())->paymentMethod;

        Reach::reaches(
            fn () => $sdk->accountUpdater->jobs->create(new AccountUpdaterJobCreate(paymentMethodIds: [$pm->id])),
            'accountUpdater.jobs.create',
        );
    }
}
