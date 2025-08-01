<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gr4vy;


class TrustlyOptions
{
    /**
     * Indicates to Gr4vy whether or not the stored Trustly agreement needs refreshing.
     *
     * @var ?bool $refreshSplitToken
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('refreshSplitToken')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $refreshSplitToken = null;

    /**
     * @param  ?bool  $refreshSplitToken
     * @phpstan-pure
     */
    public function __construct(?bool $refreshSplitToken = null)
    {
        $this->refreshSplitToken = $refreshSplitToken;
    }
}