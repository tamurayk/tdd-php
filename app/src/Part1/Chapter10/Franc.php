<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter10;

class Franc extends Money
{
    /**
     * @param int $multiplier
     * @return Franc
     */
    public function times(int $multiplier): Money
    {
        return Money::franc($this->amount * $multiplier);
    }
}