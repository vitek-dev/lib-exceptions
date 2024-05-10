<?php

declare(strict_types=1);

namespace VitekDev\Shared\Exceptions\Security;

use Exception;

class AuthorizationInsufficient extends Exception
{
    public function __construct(
        ?string $message,
    ) {
        parent::__construct($message ?? 'Authorization is insufficient');
    }
}