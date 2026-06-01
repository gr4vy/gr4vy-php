<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Backoffice;

use Gr4vy\Tests\Utils\MerchantTestCase;
use Gr4vy\Tests\Utils\Reach;
use Gr4vy\ThreeDSecureScenarioConditions;
use Gr4vy\ThreeDSecureScenarioCreate;
use Gr4vy\ThreeDSecureScenarioOutcome;
use Gr4vy\ThreeDSecureScenarioOutcomeAuthentication;
use Gr4vy\ThreeDSecureScenarioUpdate;
use PHPUnit\Framework\Attributes\Test;

/**
 * 3DS scenarios: create → list → update → delete. Creation requires a 3DS
 * service to be configured on the merchant; the mock env has none, so create /
 * update / delete are reached at the request level and list is a happy path.
 */
final class ThreeDsScenariosTest extends MerchantTestCase
{
    #[Test]
    public function list_is_happy_path(): void
    {
        $sdk = $this->sdk();
        $this->firstOf($sdk->threeDsScenarios->list());
        $this->addToAssertionCount(1);
    }

    #[Test]
    public function create_update_delete_are_reached(): void
    {
        $sdk = $this->sdk();

        $create = new ThreeDSecureScenarioCreate(
            conditions: new ThreeDSecureScenarioConditions(amount: 1000),
            outcome: new ThreeDSecureScenarioOutcome(
                authentication: new ThreeDSecureScenarioOutcomeAuthentication(transactionStatus: 'Y'),
            ),
        );

        Reach::reaches(fn () => $sdk->threeDsScenarios->create($create), 'threeDsScenarios.create');
        Reach::reaches(
            fn () => $sdk->threeDsScenarios->update(new ThreeDSecureScenarioUpdate(), self::MISSING_ID),
            'threeDsScenarios.update',
        );
        Reach::reaches(
            fn () => $sdk->threeDsScenarios->delete(self::MISSING_ID),
            'threeDsScenarios.delete',
        );
    }
}
