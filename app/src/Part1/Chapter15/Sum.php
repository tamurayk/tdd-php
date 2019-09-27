<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter15;

class Sum implements Expression
{
    /** @var  Expression */
    public $augend;

    /** @var  Expression */
    public $addend;

    /**
     * @param Expression $augend
     * @param Expression $addend
     */
    public function __construct(Expression $augend, Expression $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    /**
     * 為替レートを適用した結果を返す
     *
     * @param string $to
     * @param Bank $bank
     * @return Money
     */
    public function reduce(Bank $bank, string $to): Money //reduce = 式を単純な形に変形(簡約)するという意味
    {
        $amount = $this->addend->reduce($bank, $to)->amount() + $this->augend->reduce($bank, $to)->amount();

        return new Money($amount, $to);
    }

    /**
     * @param Expression $addend
     * @return Expression
     */
    public function plus(Expression $addend): Expression
    {
        return null;
    }
}

