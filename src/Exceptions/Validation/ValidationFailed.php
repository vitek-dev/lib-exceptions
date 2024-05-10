<?php

declare(strict_types=1);

namespace VitekDev\Shared\Exceptions\Validation;

use Exception;

class ValidationFailed extends Exception
{
    public function __construct(
        public readonly array $validationErrors,
    )
    {
        parent::__construct(
            sprintf('Validation failed: %s', implode(', ', $validationErrors))
        );
    }
}