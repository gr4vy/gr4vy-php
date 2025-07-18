<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gr4vy;


class TransactionUpdate
{
    /**
     * An external identifier that can be used to match the transaction against your own records.
     *
     * @var ?string $externalIdentifier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('external_identifier')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $externalIdentifier = null;

    /**
     * Additional information about the transaction stored as key-value pairs. If provided, the whole value will be overridden.
     *
     * @var ?array<string, string> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     * Allows for passing optional configuration per connection to take advantage of connection specific features. When provided, the data is only passed to the target connection type to prevent sharing configuration across connections. Please note that each of the keys this object are in kebab-case, for example `cybersource-anti-fraud` as they represent the ID of the connector. All the other keys will be snake case, for example `merchant_defined_data` or camel case to match an external API that the connector uses. If provided, the whole value will be overridden.
     *
     * @var ?TransactionConnectionOptions $connectionOptions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('connection_options')]
    #[\Speakeasy\Serializer\Annotation\Type('\Gr4vy\TransactionConnectionOptions|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TransactionConnectionOptions $connectionOptions = null;

    /**
     * @param  ?string  $externalIdentifier
     * @param  ?array<string, string>  $metadata
     * @param  ?TransactionConnectionOptions  $connectionOptions
     * @phpstan-pure
     */
    public function __construct(?string $externalIdentifier = null, ?array $metadata = null, ?TransactionConnectionOptions $connectionOptions = null)
    {
        $this->externalIdentifier = $externalIdentifier;
        $this->metadata = $metadata;
        $this->connectionOptions = $connectionOptions;
    }
}