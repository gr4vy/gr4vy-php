<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gr4vy;


class DlocalWalletOptions
{
    /**
     * Passes `wallet.name` to the dLocal API for those connectors that need it.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * Passes `wallet.email` to the dLocal API for those connectors that need it.
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     * Passes `wallet.token` to the dLocal API for those connectors that need it.
     *
     * @var ?string $token
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('token')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $token = null;

    /**
     * Passes `wallet.username` to the dLocal API for those connectors that need it.
     *
     * @var ?string $username
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('username')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $username = null;

    /**
     * Passes `wallet.verify` to the dLocal API for those connectors that need it.
     *
     * @var ?bool $verify
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('verify')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $verify = null;

    /**
     * @param  ?string  $name
     * @param  ?string  $email
     * @param  ?string  $token
     * @param  ?string  $username
     * @param  ?bool  $verify
     * @phpstan-pure
     */
    public function __construct(?string $name = null, ?string $email = null, ?string $token = null, ?string $username = null, ?bool $verify = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->token = $token;
        $this->username = $username;
        $this->verify = $verify;
    }
}