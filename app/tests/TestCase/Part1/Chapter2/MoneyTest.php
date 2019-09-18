<?php
declare(strict_types=1);

namespace Acme\Tests\TestCase\Part1\Chapter2;

use PHPUnit\Framework\TestCase;
use Acme\Part1\Chapter2\Dollar;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertSame(10, $product->amount);

        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }
}