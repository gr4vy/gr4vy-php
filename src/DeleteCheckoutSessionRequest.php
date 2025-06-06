<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gr4vy;

use Gr4vy\Utils\SpeakeasyMetadata;
class DeleteCheckoutSessionRequest
{
    /**
     * The ID of the checkout session.
     *
     * @var string $sessionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=session_id')]
    public string $sessionId;

    /**
     * The ID of the merchant account to use for this request.
     *
     * @var ?string $merchantAccountId
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-gr4vy-merchant-account-id')]
    public ?string $merchantAccountId = null;

    /**
     * @param  string  $sessionId
     * @param  ?string  $merchantAccountId
     * @phpstan-pure
     */
    public function __construct(string $sessionId, ?string $merchantAccountId = null)
    {
        $this->sessionId = $sessionId;
        $this->merchantAccountId = $merchantAccountId;
    }
}