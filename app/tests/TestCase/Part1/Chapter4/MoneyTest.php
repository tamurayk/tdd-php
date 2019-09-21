<?php
declare(strict_types=1);

namespace Acme\Tests\TestCase\Part1\Chapter4;

use PHPUnit\Framework\TestCase;
use Acme\Part1\Chapter4\Dollar;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $this->assertSame(new Dollar(10), $five->times(2));
        $this->assertEquals(new Dollar(15), $five->times(3));
    }

    public function testEquality()
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}