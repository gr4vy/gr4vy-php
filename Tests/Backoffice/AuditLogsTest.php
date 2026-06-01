<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Backoffice;

use Gr4vy\ListAuditLogsRequest;
use Gr4vy\Tests\Utils\MerchantTestCase;
use PHPUnit\Framework\Attributes\Test;

/** Audit logs: list (happy path). */
final class AuditLogsTest extends MerchantTestCase
{
    #[Test]
    public function list_is_happy_path(): void
    {
        $sdk = $this->sdk();
        // The merchant has activity from setup, so this typically returns entries.
        $this->firstOf($sdk->auditLogs->list(new ListAuditLogsRequest()));
        $this->addToAssertionCount(1);
    }
}
