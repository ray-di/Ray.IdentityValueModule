<?php

declare(strict_types=1);

namespace Ray\IdentityValueModule;

interface UuidInterface
{
    /**
     * Return UUID string
     */
    public function __toString(): string;
}
