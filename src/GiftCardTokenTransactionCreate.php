<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gr4vy;


class GiftCardTokenTransactionCreate
{
    /**
     * The ID for the gift card to charge.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * The monetary amount for this transaction to charge against the gift card, in the smallest currency unit for the given currency, for example `1299` cents to create an authorization for `$12.99`.
     *
     * @var int $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    public int $amount;

    /**
     * @param  string  $id
     * @param  int  $amount
     * @phpstan-pure
     */
    public function __construct(string $id, int $amount)
    {
        $this->id = $id;
        $this->amount = $amount;
    }
}