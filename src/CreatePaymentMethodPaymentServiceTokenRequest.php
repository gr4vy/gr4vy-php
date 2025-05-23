<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gr4vy;

use Gr4vy\Utils\SpeakeasyMetadata;
class CreatePaymentMethodPaymentServiceTokenRequest
{
    /**
     * The ID of the payment method
     *
     * @var string $paymentMethodId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=payment_method_id')]
    public string $paymentMethodId;

    /**
     *
     * @var PaymentServiceTokenCreate $paymentServiceTokenCreate
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public PaymentServiceTokenCreate $paymentServiceTokenCreate;

    /**
     * The ID of the merchant account to use for this request.
     *
     * @var ?string $merchantAccountId
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-gr4vy-merchant-account-id')]
    public ?string $merchantAccountId = null;

    /**
     *
     * @var ?float $timeoutInSeconds
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=timeout_in_seconds')]
    public ?float $timeoutInSeconds = null;

    /**
     * @param  string  $paymentMethodId
     * @param  PaymentServiceTokenCreate  $paymentServiceTokenCreate
     * @param  ?float  $timeoutInSeconds
     * @param  ?string  $merchantAccountId
     * @phpstan-pure
     */
    public function __construct(string $paymentMethodId, PaymentServiceTokenCreate $paymentServiceTokenCreate, ?string $merchantAccountId = null, ?float $timeoutInSeconds = 1)
    {
        $this->paymentMethodId = $paymentMethodId;
        $this->paymentServiceTokenCreate = $paymentServiceTokenCreate;
        $this->merchantAccountId = $merchantAccountId;
        $this->timeoutInSeconds = $timeoutInSeconds;
    }
}