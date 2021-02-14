<?php
/**
 * This file is part of the Ray.IdentityValueModule
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Ray\IdentityValueModule;

class FakeUuid implements UuidInterface
{
    /** @var int */
    public static $uuid = 0;

    public function __toString() : string
    {
        return (string) self::$uuid++;
    }
}
