<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Backoffice;

use Gr4vy\APIKeyPairCreate;
use Gr4vy\APIKeyPairUpdate;
use Gr4vy\Tests\Utils\MerchantTestCase;
use Gr4vy\Tests\Utils\Reach;
use Gr4vy\Tests\Utils\TestEnvironment;
use PHPUnit\Framework\Attributes\Test;

/**
 * API key pairs: list is a happy path; create/get/update/delete are reached at
 * the request level. create needs a real role to assign — the mock env has no
 * role we can reference, so a non-existent role id is rejected with a 4xx (the
 * endpoint is still reached). get/update/delete target a non-existent id and 404.
 */
final class ApiKeyPairsTest extends MerchantTestCase
{
    #[Test]
    public function list_is_happy_path(): void
    {
        // API key pairs are an account-level resource (like merchant accounts),
        // not merchant-scoped, so drive them with an unscoped (admin) client.
        $sdk = TestEnvironment::createClient($this->merchant()->privateKey);
        $this->firstOf($sdk->apiKeyPairs->list());
        $this->addToAssertionCount(1);
    }

    #[Test]
    public function create_get_update_delete_are_reached(): void
    {
        $sdk = TestEnvironment::createClient($this->merchant()->privateKey);

        // create: a non-existent role id is rejected with a 4xx, but the request
        // still reaches the endpoint (we cannot provision a real role here).
        Reach::reaches(
            fn () => $sdk->apiKeyPairs->create(new APIKeyPairCreate(
                displayName: 'coverage-probe',
                roleIds: [self::MISSING_ID],
            )),
            'apiKeyPairs.create',
        );
        Reach::reaches(fn () => $sdk->apiKeyPairs->get(self::MISSING_ID), 'apiKeyPairs.get');
        Reach::reaches(
            fn () => $sdk->apiKeyPairs->update(new APIKeyPairUpdate(displayName: 'renamed'), self::MISSING_ID),
            'apiKeyPairs.update',
        );
        Reach::reaches(fn () => $sdk->apiKeyPairs->delete(self::MISSING_ID), 'apiKeyPairs.delete');
    }
}
