<?php

declare(strict_types=1);

namespace VitekDev\Shared\Exceptions;

use Exception;

class AuthenticationRequired extends Exception
{
    public function __construct(
        ?string $message,
    ) {
        parent::__construct($message ?? 'Authentication is required');
    }
}