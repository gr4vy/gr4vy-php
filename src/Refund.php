<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gr4vy;


class Refund
{
    /**
     * The unique identifier for the refund.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * The ID of the transaction associated with this refund.
     *
     * @var string $transactionId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transaction_id')]
    public string $transactionId;

    /**
     *
     * @var string $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    public string $status;

    /**
     * The ISO 4217 currency code for this refund. Will always match that of the associated transaction.
     *
     * @var string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    public string $currency;

    /**
     * The amount of this refund, in the smallest currency unit (for example, cents or pence).
     *
     * @var int $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    public int $amount;

    /**
     *
     * @var string $targetType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('target_type')]
    public string $targetType;

    /**
     * The base62 encoded refund ID. This represents a shorter version of this refund's `id` which is sent to payment services, anti-fraud services, and other connectors. You can use this ID to reconcile a payment service's refund against our system.
     *
     * @var string $reconciliationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reconciliation_id')]
    public string $reconciliationId;

    /**
     * The base62 encoded transaction ID. This represents a shorter version of the related transaction's `id` which is sent to payment services, anti-fraud services, and other connectors. You can use this ID to reconcile a payment service's transaction against our system.
     *
     * @var string $transactionReconciliationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transaction_reconciliation_id')]
    public string $transactionReconciliationId;

    /**
     * The date this refund was created at.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * The date this refund was last updated at.
     *
     * @var \DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    public \DateTime $updatedAt;

    /**
     * The payment service's unique ID for the refund.
     *
     * @var ?string $paymentServiceRefundId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payment_service_refund_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $paymentServiceRefundId = null;

    /**
     * The reason for this refund. Could be a multiline string.
     *
     * @var ?string $reason
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reason')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $reason = null;

    /**
     * The optional ID of the instrument that was refunded. This may be `null` if the instrument was not stored.
     *
     * @var ?string $targetId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('target_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $targetId = null;

    /**
     * An external identifier that can be used to match the refund against your own records.
     *
     * @var ?string $externalIdentifier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('external_identifier')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $externalIdentifier = null;

    /**
     * An external identifier that can be used to match the transaction against your own records.
     *
     * @var ?string $transactionExternalIdentifier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('transaction_external_identifier')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $transactionExternalIdentifier = null;

    /**
     * The user that created this resource
     *
     * @var ?Creator $creator
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('creator')]
    #[\Speakeasy\Serializer\Annotation\Type('\Gr4vy\Creator|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Creator $creator = null;

    /**
     * The standardized error code set by Gr4vy.
     *
     * @var ?string $errorCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $errorCode = null;

    /**
     * This is the response code received from the payment service. This can be set to any value and is not standardized across different payment services.
     *
     * @var ?string $rawResponseCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('raw_response_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $rawResponseCode = null;

    /**
     *  This is the response description received from the payment service. This can be set to any value and is not standardized across different payment services.
     *
     * @var ?string $rawResponseDescription
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('raw_response_description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $rawResponseDescription = null;

    /**
     * Always `refund`.
     *
     * @var ?string $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $type = null;

    /**
     * @param  string  $id
     * @param  string  $transactionId
     * @param  string  $status
     * @param  string  $currency
     * @param  int  $amount
     * @param  string  $targetType
     * @param  string  $reconciliationId
     * @param  string  $transactionReconciliationId
     * @param  \DateTime  $createdAt
     * @param  \DateTime  $updatedAt
     * @param  ?string  $type
     * @param  ?string  $paymentServiceRefundId
     * @param  ?string  $reason
     * @param  ?string  $targetId
     * @param  ?string  $externalIdentifier
     * @param  ?string  $transactionExternalIdentifier
     * @param  ?Creator  $creator
     * @param  ?string  $errorCode
     * @param  ?string  $rawResponseCode
     * @param  ?string  $rawResponseDescription
     * @phpstan-pure
     */
    public function __construct(string $id, string $transactionId, string $status, string $currency, int $amount, string $targetType, string $reconciliationId, string $transactionReconciliationId, \DateTime $createdAt, \DateTime $updatedAt, ?string $paymentServiceRefundId = null, ?string $reason = null, ?string $targetId = null, ?string $externalIdentifier = null, ?string $transactionExternalIdentifier = null, ?Creator $creator = null, ?string $errorCode = null, ?string $rawResponseCode = null, ?string $rawResponseDescription = null, ?string $type = 'refund')
    {
        $this->id = $id;
        $this->transactionId = $transactionId;
        $this->status = $status;
        $this->currency = $currency;
        $this->amount = $amount;
        $this->targetType = $targetType;
        $this->reconciliationId = $reconciliationId;
        $this->transactionReconciliationId = $transactionReconciliationId;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->paymentServiceRefundId = $paymentServiceRefundId;
        $this->reason = $reason;
        $this->targetId = $targetId;
        $this->externalIdentifier = $externalIdentifier;
        $this->transactionExternalIdentifier = $transactionExternalIdentifier;
        $this->creator = $creator;
        $this->errorCode = $errorCode;
        $this->rawResponseCode = $rawResponseCode;
        $this->rawResponseDescription = $rawResponseDescription;
        $this->type = $type;
    }
}