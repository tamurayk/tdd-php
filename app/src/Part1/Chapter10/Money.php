<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter10;

class Money
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
     * @param Money $object
     * @return bool
     */
    public function equals(Money $object): bool
    {
        $money = $object;

        return ($this->amount === $money->amount)
            && ($this->currency === $money->currency);
    }

    public function toString(): string
    {
        return `{$this->amount} {$this->currency}`;
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
