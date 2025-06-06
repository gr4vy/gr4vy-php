<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gr4vy\errors;

class Error504Throwable extends \RuntimeException
{
    public Error504 $container;

    public function __construct(string $message, int $statusCode, Error504 $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}