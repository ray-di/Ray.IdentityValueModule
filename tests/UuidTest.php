<?php

declare(strict_types=1);

namespace Ray\IdentityValueModule;

use PHPUnit\Framework\TestCase;
use Ray\Di\Injector;

use function preg_match;

class UuidTest extends TestCase
{
    public function testIsInstanceOfIdentityValueModule(): void
    {
        $uuid = (new Injector(new IdentityValueModule()))->getInstance(UuidInterface::class);
        $uuidv4 = '/^[0-9A-F]{8}-[0-9A-F]{4}-4[0-9A-F]{3}-[89AB][0-9A-F]{3}-[0-9A-F]{12}$/i';
        $this->assertSame(1, preg_match($uuidv4, (string) $uuid));
    }
}
