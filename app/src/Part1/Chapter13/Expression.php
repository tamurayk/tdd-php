<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter13;

interface Expression { //Expression = 式
    /**
     * @param string $to
     * @return Money
     */
    public function reduce(string $to): Money;
}
