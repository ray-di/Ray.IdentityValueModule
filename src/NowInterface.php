<?php
/**
 * This file is part of the Koriym.Now
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Ray\IdentityValueModule;

interface NowInterface
{
    /**
     * Return current time
     */
    public function __toString() : string;
}
