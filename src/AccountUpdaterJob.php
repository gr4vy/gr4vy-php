<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gr4vy;


class AccountUpdaterJob
{
    /**
     * The ID for the account updater job.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * The ID of the merchant account this job belongs to.
     *
     * @var string $merchantAccountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('merchant_account_id')]
    public string $merchantAccountId;

    /**
     * A list of the payment methods that have been scheduled for an update.
     *
     * @var array<AccountUpdaterInquirySummary> $inquiries
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('inquiries')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Gr4vy\AccountUpdaterInquirySummary>')]
    public array $inquiries;

    /**
     * The date and time when this payment method was first created in our system.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * The date and time when this payment method was last updated in our system.
     *
     * @var \DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    public \DateTime $updatedAt;

    /**
     * Always `account-updater-job`
     *
     * @var ?string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $type = null;

    /**
     * @param  string  $id
     * @param  string  $merchantAccountId
     * @param  array<AccountUpdaterInquirySummary>  $inquiries
     * @param  \DateTime  $createdAt
     * @param  \DateTime  $updatedAt
     * @param  ?string  $type
     * @phpstan-pure
     */
    public function __construct(string $id, string $merchantAccountId, array $inquiries, \DateTime $createdAt, \DateTime $updatedAt, ?string $type = 'account-updater-job')
    {
        $this->id = $id;
        $this->merchantAccountId = $merchantAccountId;
        $this->inquiries = $inquiries;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->type = $type;
    }
}