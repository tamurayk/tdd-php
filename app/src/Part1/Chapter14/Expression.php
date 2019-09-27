<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter14;

interface Expression { //Expression = 式
    /**
     * @param Bank $bank
     * @param string $to
     * @return Money
     */
    public function reduce(Bank $bank, string $to): Money;
}
