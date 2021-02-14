<?php

declare(strict_types=1);

namespace Ray\IdentityValueModule;

class FakeUuid implements UuidInterface
{
    /** @var int */
    public static $uuid = 0;

    public function __toString(): string
    {
        return (string) self::$uuid++;
    }
}
