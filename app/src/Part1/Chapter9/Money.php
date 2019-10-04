<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter9;

abstract class Money
{
    /** @var int */
    protected $amount;

    /** @var string */
    protected $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @param int $multiplier
     * @return Money
     */
    abstract function times(int $multiplier): Money;

    public function currency(): string
    {
        return $this->currency;
    }

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
     *
     * note:
     *   Factory Method(= オブジェクトを作成するメソッド)
     *
     */
    static function dollar(int $amount): Money
    {
        return new Dollar($amount, 'USD');
    }

    /**
     * @param int $amount
     * @return Money
     *
     * note:
     *   Factory Method(= オブジェクトを作成するメソッド)
     *
     */
    static function franc(int $amount): Money
    {
        return new Franc($amount, 'CHF');
    }
}
