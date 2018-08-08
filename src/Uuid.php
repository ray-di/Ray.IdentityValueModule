<?php
/**
 * This file is part of the Ray.IdentityValueModule
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Ray\IdentityValueModule;

use Ramsey\Uuid\Uuid as RamseyUuid;

class Uuid implements UuidInterface
{
    public function __toString() : string
    {
        return RamseyUuid::uuid4()->toString();
    }
}
