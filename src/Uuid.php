<?php

declare(strict_types=1);

namespace Ray\IdentityValueModule;

use Ramsey\Uuid\Uuid as RamseyUuid;

class Uuid implements UuidInterface
{
    public function __toString(): string
    {
        return RamseyUuid::uuid4()->toString();
    }
}
