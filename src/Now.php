<?php
/**
 * This file is part of the Koriym.Now
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Ray\IdentityValueModule;

final class Now implements NowInterface
{
    public function __toString() : string
    {
        return (new \DateTime)->format('Y-m-d H:i:s');
    }
}
