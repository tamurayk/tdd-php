<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter12;

class Money implements Expression
{
    /** @var int */
    protected $amount;

    /** @var string */
    protected $currency;

    /**
     * Money constructor.
     * @param int $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @param Money $object
     * @return bool
     */
    public function equals(Money $object): bool
    {
        $money = $object;

        return ($this->amount === $money->amount)
            && ($this->currency === $money->currency);
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
        return new Money($amount, 'USD');
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
        return new Money($amount, 'CHF');
    }

    /**
     * @param int $multiplier
     * @return Money
     */
    public function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    /**
     * @return string
     */
    public function currency(): string
    {
        return $this->currency;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->amount . ' ' . $this->currency;
    }

    /**
     * @param Money $addend
     * @return Expression
     */
    public function plus(Money $addend): Expression
    {
        return new Money($this->amount + $addend->amount, $this->currency);
    }
}