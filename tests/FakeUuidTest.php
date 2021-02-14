<?php

declare(strict_types=1);

namespace Ray\IdentityValueModule;

use PHPUnit\Framework\TestCase;
use Ray\Di\Injector;

class FakeUuidTest extends TestCase
{
    public function testIsInstanceOfIdentityValueModule(): void
    {
        $uuid = (new Injector(new FakeIdentityValueModule()))->getInstance(UuidInterface::class);
        $this->assertSame('0', (string) $uuid);
        $this->assertSame('1', (string) $uuid);
    }
}
