<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gr4vy\errors;

class Error400Throwable extends \RuntimeException
{
    public Error400 $container;

    public function __construct(string $message, int $statusCode, Error400 $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}