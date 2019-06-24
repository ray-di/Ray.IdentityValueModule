<?php
/**
 * This file is part of the Ray.IdentityValueModule
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Ray\IdentityValueModule;

use PHPUnit\Framework\TestCase;
use Ray\Di\Injector;

class DbDatetimeTest extends TestCase
{
    /**
     * @var DbDateTimeInterface
     */
    protected $datetime;

    protected function setUp()
    {
        $this->datetime = (new Injector(new IdentityValueModule()))->getInstance(DbDateTimeInterface::class);
    }

    public function testConvert()
    {
        $actual = ($this->datetime)('2005-08-15T15:52:01+00:00');
        $this->assertSame('2005-08-15 15:52:01', $actual);
    }
}
