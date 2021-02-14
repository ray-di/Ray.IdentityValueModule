<?php

declare(strict_types=1);

namespace Ray\IdentityValueModule;

use DateTime;
use DateTimeImmutable;
use DateTimeInterface;
use PHPUnit\Framework\TestCase;
use Ray\Di\Injector;

use function assert;

class FakeNowModuleTest extends TestCase
{
    /** @var Injector */
    private $injector;

    protected function setUp(): void
    {
        $this->injector = new Injector(new FakeNowModule());
    }

    public function testFakeNowModule(): void
    {
        $now = $this->injector->getInstance(NowInterface::class);
        $this->assertInstanceOf(FakeNow::class, $now);
    }

    public function testDateTimeInterface(): void
    {
        $dateTime = $this->injector->getInstance(DateTimeInterface::class);
        $this->assertInstanceOf(DateTimeImmutable::class, $dateTime);
        assert($dateTime instanceof DateTimeImmutable);
        $this->assertSame('1970-01-01T00:00:00+00:00', $dateTime->format(DateTime::ATOM));
    }
}
