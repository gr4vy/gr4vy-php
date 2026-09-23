<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Backoffice;

use Gr4vy\ListRolesResponse;
use Gr4vy\Tests\Utils\MerchantTestCase;
use PHPUnit\Framework\Attributes\Test;

/** Roles: list (happy path). */
final class RolesTest extends MerchantTestCase
{
    #[Test]
    public function list_is_happy_path(): void
    {
        $sdk = $this->sdk();
        // list() is a lazy paginator — iterating it sends the request.
        $page = $this->firstOf($sdk->roles->list());
        $this->assertInstanceOf(ListRolesResponse::class, $page);
        $this->assertNotNull($page->collectionRole);

        // Don't assume the instance has roles; just check whatever comes back is one.
        foreach ($page->collectionRole->items as $role) {
            $this->assertSame('role', $role->type);
            $this->assertNotEmpty($role->id);
            $this->assertNotEmpty($role->slug);
        }
    }
}
