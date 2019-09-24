<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter14;

class Sum implements Expression {
    /** @var Money */
    public $augend;

    /** @var Money */
    public $addend;

    /**
     * @param Money $augend
     * @param Money $addend
     */
    public function __construct(Money $augend, Money $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    /**
     * 為替レートを適用した結果を返す
     *
     * @param string $to
     * @return Money
     */
    public function reduce(string $to): Money //reduce = 式を単純な形に変形(簡約)するという意味
    {
        $amount = $this->augend->amount() + $this->addend->amount();
        return new Money($amount, $to);
    }
}

