<?php

declare(strict_types=1);

namespace VitekDev\Shared\Exceptions;

use Exception;

class ResourceAlreadyExists extends Exception
{
    public function __construct(
        public readonly ?string $identifier,
    ) {
        if ($this->identifier) {
            parent::__construct(sprintf("Resource with identifier %s already exists", $this->identifier));
        } else {
            parent::__construct('Resource was not found');
        }
    }
}