<?php

declare(strict_types=1);

namespace Ray\IdentityValueModule;

use PHPUnit\Framework\TestCase;
use Ray\Di\Injector;

class FakeNowModuleTest extends TestCase
{
    public function testFakeNowModule(): void
    {
        $now = (new Injector(new FakeIdentityValueModule(new FakeNowModule())))->getInstance(NowInterface::class);
        $this->assertInstanceOf(FakeNow::class, $now);
    }
}
