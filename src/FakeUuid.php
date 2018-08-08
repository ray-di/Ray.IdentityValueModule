<?php
/**
 * This file is part of the Ray.IdentityValueModule
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Ray\IdentityValueModule;

class FakeUuid implements UuidInterface
{
    const VALUE = '11111111-2222-3333-4444-4fdffa026136';

    public function __toString() : string
    {
        return self::VALUE;
    }
}
