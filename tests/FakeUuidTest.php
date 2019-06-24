<?php
/**
 * This file is part of the Ray.IdentityValueModule
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Ray\IdentityValueModule;

use PHPUnit\Framework\TestCase;
use Ray\Di\Injector;

class FakeUuidTest extends TestCase
{
    public function testIsInstanceOfIdentityValueModule()
    {
        $uuid = (new Injector(new FakeIdentityValueModule()))->getInstance(UuidInterface::class);
        $this->assertSame('0', (string) $uuid);
        $this->assertSame('1', (string) $uuid);
    }
}
