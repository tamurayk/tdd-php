<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter9;

abstract class Money
{
    /** @var int */
    protected $amount;

    /**
     * @param int $multiplier
     * @return Money
     */
    abstract function times(int $multiplier): Money;

    /**
     * @param Money $object
     * @return bool
     */
    public function equals(Money $object): bool
    {
        $money = $object;

        return $this->amount == $money->amount
            && get_class($this) == get_class($object);
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
}
