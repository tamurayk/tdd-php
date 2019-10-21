<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter14;

interface Expression
{
    /**
     * @param string $to
     * @return Money
     */
    public function reduce(string $to): Money;
}
