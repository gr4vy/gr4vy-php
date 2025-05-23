<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gr4vy\errors;

class Error405Throwable extends \RuntimeException
{
    public Error405 $container;

    public function __construct(string $message, int $statusCode, Error405 $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}