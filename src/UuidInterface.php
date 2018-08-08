<?php
/**
 * This file is part of the Ray.IdentityValueModule
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Ray\IdentityValueModule;

interface UuidInterface
{
    /**
     * Return UUID string
     */
    public function __toString() : string;
}
