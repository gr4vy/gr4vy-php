<?php

declare(strict_types=1);

namespace Gr4vy\Tests\Processing;

use Gr4vy\ApplePaySessionRequest;
use Gr4vy\ClickToPaySessionRequest;
use Gr4vy\DigitalWalletCreate;
use Gr4vy\DigitalWalletDomain;
use Gr4vy\DigitalWalletUpdate;
use Gr4vy\GooglePaySessionRequest;
use Gr4vy\Tests\Utils\MerchantTestCase;
use Gr4vy\Tests\Utils\Reach;
use PHPUnit\Framework\Attributes\Test;

/**
 * Digital wallets. Registering a real wallet needs provider credentials the mock
 * env lacks, so create/get/update/delete + domains + sessions are reached at the
 * request level; list is a real happy path (empty page).
 */
final class DigitalWalletsTest extends MerchantTestCase
{
    #[Test]
    public function list_is_happy_path(): void
    {
        $sdk = $this->sdk();
        $list = $sdk->digitalWallets->list()->digitalWallets;
        $this->assertNotNull($list);
    }

    #[Test]
    public function crud_is_reached(): void
    {
        $sdk = $this->sdk();

        Reach::reaches(
            fn () => $sdk->digitalWallets->create(new DigitalWalletCreate(
                provider: 'google',
                merchantName: 'Acme',
                acceptTermsAndConditions: true,
            )),
            'digitalWallets.create',
        );
        Reach::reaches(fn () => $sdk->digitalWallets->get(self::MISSING_ID), 'digitalWallets.get');
        Reach::reaches(
            fn () => $sdk->digitalWallets->update(new DigitalWalletUpdate(), self::MISSING_ID),
            'digitalWallets.update',
        );
        Reach::reaches(fn () => $sdk->digitalWallets->delete(self::MISSING_ID), 'digitalWallets.delete');
    }

    #[Test]
    public function domains_are_reached(): void
    {
        $sdk = $this->sdk();
        Reach::reaches(
            fn () => $sdk->digitalWallets->domains->create(new DigitalWalletDomain('example.com'), self::MISSING_ID),
            'digitalWallets.domains.create',
        );
        Reach::reaches(
            fn () => $sdk->digitalWallets->domains->delete(new DigitalWalletDomain('example.com'), self::MISSING_ID),
            'digitalWallets.domains.delete',
        );
    }

    #[Test]
    public function sessions_are_reached(): void
    {
        $sdk = $this->sdk();
        Reach::reaches(
            fn () => $sdk->digitalWallets->sessions->applePay(
                new ApplePaySessionRequest(validationUrl: 'https://apple.example/validate', domainName: 'example.com')
            ),
            'digitalWallets.sessions.applePay',
        );
        Reach::reaches(
            fn () => $sdk->digitalWallets->sessions->googlePay(new GooglePaySessionRequest(originDomain: 'example.com')),
            'digitalWallets.sessions.googlePay',
        );
        Reach::reaches(
            fn () => $sdk->digitalWallets->sessions->clickToPay(new ClickToPaySessionRequest(checkoutSessionId: self::MISSING_ID)),
            'digitalWallets.sessions.clickToPay',
        );
    }
}
