<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gr4vy;


class GiftCardSummaries
{
    /**
     * A list of items returned for this request.
     *
     * @var array<GiftCardSummary> $items
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Gr4vy\GiftCardSummary>')]
    public array $items;

    /**
     * @param  array<GiftCardSummary>  $items
     * @phpstan-pure
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }
}