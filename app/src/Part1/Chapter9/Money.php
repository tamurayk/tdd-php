<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter9;

abstract class Money{
    /** @var  int */
    protected $amount;

    /**
     * @param Money $money
     * @return bool
     */
    public function equals(Money $money): bool
    {
        return ($this->amount === $money->amount) &&
            (get_class($this) === get_class($money));
    }

    /**
     * @param int $amount
     * @return Money
     */
    static function dollar(int $amount): Money
    {
        return new Dollar($amount);
    }

    /**
     * @param int $amount
     * @return Money
     */
    static function franc(int $amount): Money
    {
        return new Franc($amount);
    }

    /**
     * @param int $multiplier
     * @return Money
     */
    abstract function times(int $multiplier): Money;
}