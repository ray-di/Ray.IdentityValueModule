<?php

declare(strict_types=1);

namespace Ray\IdentityValueModule;

interface NowInterface
{
    /**
     * Return current time
     */
    public function __toString(): string;

    /**
     * Return current time in ISO8601 format
     */
    public function iso8601(): string;
}
