<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gr4vy;


class GiftCardCreate
{
    /**
     * The 16-19 digit number for the gift card.
     *
     * @var string $number
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('number')]
    public string $number;

    /**
     * The PIN for this gift card.
     *
     * @var string $pin
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pin')]
    public string $pin;

    /**
     *  The ID of the buyer to associate this gift card to. If this field is provided then the `buyer_external_identifier` field needs to be unset.
     *
     * @var ?string $buyerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('buyer_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $buyerId = null;

    /**
     * The `external_identifier` of the buyer to associate this gift card to. If this field is provided then the `buyer_id` field needs to be unset.
     *
     * @var ?string $buyerExternalIdentifier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('buyer_external_identifier')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $buyerExternalIdentifier = null;

    /**
     * @param  string  $number
     * @param  string  $pin
     * @param  ?string  $buyerId
     * @param  ?string  $buyerExternalIdentifier
     * @phpstan-pure
     */
    public function __construct(string $number, string $pin, ?string $buyerId = null, ?string $buyerExternalIdentifier = null)
    {
        $this->number = $number;
        $this->pin = $pin;
        $this->buyerId = $buyerId;
        $this->buyerExternalIdentifier = $buyerExternalIdentifier;
    }
}