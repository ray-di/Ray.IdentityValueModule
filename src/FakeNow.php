<?php
/**
 * This file is part of the Koriym.Now
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Ray\IdentityValueModule;

final class FakeNow implements NowInterface
{
    const VALUE = '1970-01-01 00:00:00';

    public function __toString() : string
    {
        return (new \DateTime(self::VALUE))->format('Y-m-d H:i:s');
    }
}
