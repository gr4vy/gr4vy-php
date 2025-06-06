<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gr4vy;


class AuditLogEntryUser
{
    /**
     * The name of the user.
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * Whether this is a Gr4vy staff user.
     *
     * @var bool $isStaff
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_staff')]
    public bool $isStaff;

    /**
     *
     * @var string $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    public string $status;

    /**
     * The ID of the user.
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * The email address for this user.
     *
     * @var ?string $emailAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email_address')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $emailAddress = null;

    /**
     * Always `user`.
     *
     * @var ?string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $type = null;

    /**
     * @param  string  $name
     * @param  bool  $isStaff
     * @param  string  $status
     * @param  ?string  $type
     * @param  ?string  $id
     * @param  ?string  $emailAddress
     * @phpstan-pure
     */
    public function __construct(string $name, bool $isStaff, string $status, ?string $id = null, ?string $emailAddress = null, ?string $type = 'user')
    {
        $this->name = $name;
        $this->isStaff = $isStaff;
        $this->status = $status;
        $this->id = $id;
        $this->emailAddress = $emailAddress;
        $this->type = $type;
    }
}