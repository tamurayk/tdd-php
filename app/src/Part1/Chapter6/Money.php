<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter6;

class Money
{
    /** @var int */
    protected $amount;


    /**
     * @param Money $object
     * @return bool
     */
    public function equals(Money $object): bool
    {
        $money = $object;

        return $this->amount == $money->amount;
    }
}
