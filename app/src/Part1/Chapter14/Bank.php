<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter14;

class Bank
{
    /**
     * @param Expression $source
     * @param string $to
     * @return Money
     */
    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($this, $to);
    }

    /**
     * @param string $from
     * @param string $to
     * @param int $rate
     */
    public function addRate(string $from, string $to, int $rate): void
    {
    }

    /**
     * @param string $from
     * @param string $to
     * @return int
     */
    public function rate(string $from, string $to): int
    {
        return $from === 'CHF' && $to === 'USD' ? 2 : 1;
    }
}
