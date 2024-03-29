<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter5;

class Dollar
{
    /** @var  int */
    private $amount;

    /**
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
        return ($this->amount === $object->amount);
    }
}