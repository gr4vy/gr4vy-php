<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gr4vy;


class ReportExecutionUrl
{
    /**
     * A signed URL to download the report execution file.
     *
     * @var string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     * The date and time when the download URL expires.
     *
     * @var \DateTime $expiresAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expires_at')]
    public \DateTime $expiresAt;

    /**
     * @param  string  $url
     * @param  \DateTime  $expiresAt
     * @phpstan-pure
     */
    public function __construct(string $url, \DateTime $expiresAt)
    {
        $this->url = $url;
        $this->expiresAt = $expiresAt;
    }
}