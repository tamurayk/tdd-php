<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter9;

class Franc extends Money
{
    /**
     * Franc constructor.
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param int $multiplier
     * @return Money
     */
    public function times(int $multiplier): Money
    {
        return new Franc($this->amount * $multiplier);
    }
}
