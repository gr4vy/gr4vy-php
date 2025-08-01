<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gr4vy;


class StripeConnectOptions
{
    /**
     * The Stripe Connect account to target using the `Stripe-Account` header.
     *
     * @var ?string $stripeAccount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('stripe_account')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $stripeAccount = null;

    /**
     * The fee to charge the connected account.
     *
     * @var ?int $applicationFeeAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('application_fee_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $applicationFeeAmount = null;

    /**
     * The Stripe Connect account to target using the `on_behalf_of` request parameter.
     *
     * @var ?string $onBehalfOf
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('on_behalf_of')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $onBehalfOf = null;

    /**
     * The Stripe Connect account to target using the `transfer_data.destination` request parameter.
     *
     * @var ?string $transferDataDestination
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transfer_data_destination')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $transferDataDestination = null;

    /**
     * @param  ?string  $stripeAccount
     * @param  ?int  $applicationFeeAmount
     * @param  ?string  $onBehalfOf
     * @param  ?string  $transferDataDestination
     * @phpstan-pure
     */
    public function __construct(?string $stripeAccount = null, ?int $applicationFeeAmount = null, ?string $onBehalfOf = null, ?string $transferDataDestination = null)
    {
        $this->stripeAccount = $stripeAccount;
        $this->applicationFeeAmount = $applicationFeeAmount;
        $this->onBehalfOf = $onBehalfOf;
        $this->transferDataDestination = $transferDataDestination;
    }
}