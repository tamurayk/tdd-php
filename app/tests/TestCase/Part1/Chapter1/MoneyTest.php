<?php
declare(strict_types=1);

namespace Acme\Tests\TestCase\Part1\Chapter1;

use PHPUnit\Framework\TestCase;
use Acme\Part1\Chapter1\Dollar;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $five->times(2);

        $this->assertSame(10, $five->amount);
    }
}