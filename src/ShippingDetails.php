<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gr4vy;


class ShippingDetails
{
    /**
     * The first name(s) or given name for the buyer.
     *
     * @var ?string $firstName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('first_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $firstName = null;

    /**
     * The last name, or family name, of the buyer.
     *
     * @var ?string $lastName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastName = null;

    /**
     * The email address for the buyer.
     *
     * @var ?string $emailAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email_address')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $emailAddress = null;

    /**
     * The phone number for the buyer which should be formatted according to the E164 number standard.
     *
     * @var ?string $phoneNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('phone_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $phoneNumber = null;

    /**
     * The billing address for the buyer.
     *
     * @var ?Address $address
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Gr4vy\Address|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Address $address = null;

    /**
     * The ID for the shipping details.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * The ID for the buyer.
     *
     * @var ?string $buyerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('buyer_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $buyerId = null;

    /**
     * Always `shipping-details`.
     *
     * @var ?string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $type = null;

    /**
     * @param  ?string  $type
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?string  $emailAddress
     * @param  ?string  $phoneNumber
     * @param  ?Address  $address
     * @param  ?string  $id
     * @param  ?string  $buyerId
     * @phpstan-pure
     */
    public function __construct(?string $firstName = null, ?string $lastName = null, ?string $emailAddress = null, ?string $phoneNumber = null, ?Address $address = null, ?string $id = null, ?string $buyerId = null, ?string $type = 'shipping-details')
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->emailAddress = $emailAddress;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
        $this->id = $id;
        $this->buyerId = $buyerId;
        $this->type = $type;
    }
}