<?php
namespace Ray\IdentityValueModule;

use PHPUnit\Framework\TestCase;

class Iso8601Test extends TestCase
{
    public function testConvertOne()
    {
        $actul = (new Iso8601)->convertOne('1970-01-01 00:00:00');
        $this->assertSame('1970-01-01T00:00:00+01:00', $actul);
    }

    public function testconvertList()
    {
        $list = [
            ['a' => 0, 'created' => '1970-01-01 00:00:00'],
            ['a' => 0, 'created' => '1970-01-01 00:00:00']
        ];
        $converted = (new Iso8601)->convertList($list, ['created']);
        $expected = [
            ['a' => 0, 'created' => '1970-01-01T00:00:00+01:00'],
            ['a' => 0, 'created' => '1970-01-01T00:00:00+01:00'],
        ];
        $this->assertSame($expected, $converted);
    }
}
