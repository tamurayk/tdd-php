<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter10;

class Franc extends Money
{
    /**
     * Franc constructor.
     * @param int $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }
}
