<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter4;

class Dollar
{
    /**
     * @var int
     */
    private $amount;

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
     * @return Dollar
     */
    public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

    /**
     * @param Dollar $object
     * @return bool
     */
    public function equals(Dollar $object): bool
    {
        $dollar = $object;

        return $this->amount == $dollar->amount;
    }
}
