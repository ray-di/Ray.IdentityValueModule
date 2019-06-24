<?php
namespace Ray\IdentityValueModule;

use PHPUnit\Framework\TestCase;
use Ray\Di\Injector;

class FakeNowModuleTest extends TestCase
{
    public function testFakeNowModule()
    {
        $now = (new Injector(new FakeIdentityValueModule(new FakeNowModule)))->getInstance(NowInterface::class);
        $this->assertInstanceOf(FakeNow::class, $now);
    }
}
