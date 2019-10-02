<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter2;

class Dollar
{
    /**
     * @var int
     */
    public $amount;

    /**
     * Dollar constructor.
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param int $multiplier
     */
    public function times(int $multiplier): void
    {
        $this->amount *= $multiplier;
    }
}