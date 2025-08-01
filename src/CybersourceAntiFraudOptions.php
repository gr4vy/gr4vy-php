<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gr4vy;


class CybersourceAntiFraudOptions
{
    /**
     * A list of merchant defined data to be passed to the Cybersource Decision Manager API. Each key needs to be a numeric string.
     *
     * @var ?array<string, string> $merchantDefinedData
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('merchant_defined_data')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $merchantDefinedData = null;

    /**
     * The merchant ID to use for this transaction. This requires a meta key to be set up for use with Cybersource Decision Manager, and this overrides the connector configuration.
     *
     * @var ?string $metaKeyMerchantId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('meta_key_merchant_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $metaKeyMerchantId = null;

    /**
     * The shipping method for this transaction.
     *
     * @var ?string $shippingMethod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('shipping_method')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $shippingMethod = null;

    /**
     * @param  ?array<string, string>  $merchantDefinedData
     * @param  ?string  $metaKeyMerchantId
     * @param  ?string  $shippingMethod
     * @phpstan-pure
     */
    public function __construct(?array $merchantDefinedData = null, ?string $metaKeyMerchantId = null, ?string $shippingMethod = null)
    {
        $this->merchantDefinedData = $merchantDefinedData;
        $this->metaKeyMerchantId = $metaKeyMerchantId;
        $this->shippingMethod = $shippingMethod;
    }
}