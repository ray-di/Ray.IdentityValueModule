<?php

declare(strict_types=1);

namespace Ray\IdentityValueModule;

use PHPUnit\Framework\TestCase;
use Ray\Di\Injector;

use function assert;

class FakeNowTest extends TestCase
{
    public function testIsInstanceOfIdentityValueModule(): void
    {
        $now = (new Injector(new FakeIdentityValueModule()))->getInstance(NowInterface::class);
        $nowString = (string) $now;
        $this->assertSame(FakeNow::VALUE, $nowString);
    }

    public function testIso8601(): void
    {
        $now = (new Injector(new FakeIdentityValueModule()))->getInstance(NowInterface::class);
        assert($now instanceof NowInterface);
        $nowString = $now->iso8601();
        $this->assertSame(FakeNow::ISO8601, $nowString);
    }
}
