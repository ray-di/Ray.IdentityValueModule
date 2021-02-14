<?php
/**
 * This file is part of the Ray.IdentityValueModule
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Ray\IdentityValueModule;

use PHPUnit\Framework\TestCase;
use Ray\Di\Injector;

class FakeNowTest extends TestCase
{
    public function testIsInstanceOfIdentityValueModule(): void
    {
        $now = (new Injector(new FakeIdentityValueModule()))->getInstance(NowInterface::class);
        $nowString = (string) $now;
        $this->assertSame(FakeNow::VALUE, $nowString);
    }
}
