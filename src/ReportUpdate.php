<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gr4vy;


class ReportUpdate
{
    /**
     * The name of the report.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * A description of the report.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * Whether the report schedule is enabled.
     *
     * @var ?bool $scheduleEnabled
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('schedule_enabled')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $scheduleEnabled = null;

    /**
     * @param  ?string  $name
     * @param  ?string  $description
     * @param  ?bool  $scheduleEnabled
     * @phpstan-pure
     */
    public function __construct(?string $name = null, ?string $description = null, ?bool $scheduleEnabled = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->scheduleEnabled = $scheduleEnabled;
    }
}