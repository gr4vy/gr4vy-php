<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Gr4vy;

$sdk = Gr4vy\SDK::builder()
    ->setMerchantAccountId('default')
    ->setSecurity(
        '<YOUR_BEARER_TOKEN_HERE>'
    )
    ->build();

$accountUpdaterJobCreate = new Gr4vy\AccountUpdaterJobCreate(
    paymentMethodIds: [
        'ef9496d8-53a5-4aad-8ca2-00eb68334389',
        'f29e886e-93cc-4714-b4a3-12b7a718e595',
    ],
);

$response = $sdk->accountUpdater->jobs->create(
    accountUpdaterJobCreate: $accountUpdaterJobCreate
);

if ($response->accountUpdaterJob !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->