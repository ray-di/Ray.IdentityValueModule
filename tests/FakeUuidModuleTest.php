<?php
namespace Ray\IdentityValueModule;

use PHPUnit\Framework\TestCase;
use Ray\Di\Injector;

class FakeUuidModuleTest extends TestCase
{
    public function testFakeUUidModule(): void
    {
        $uuid = (new Injector(new FakeIdentityValueModule(new FakeUuidModule)))->getInstance(UuidInterface::class);
        $this->assertInstanceOf(FakeUuid::class, $uuid);
    }
}
