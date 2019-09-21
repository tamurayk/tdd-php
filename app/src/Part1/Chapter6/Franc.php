<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter6;

class Franc
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
     * @return Franc
     */
    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }

    /**
     * @param Franc $object
     * @return bool
     */
    public function equals(Franc $object): bool
    {
        return ($this->amount === $object->amount);
    }
}