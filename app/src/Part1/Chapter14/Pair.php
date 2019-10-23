<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter14;

class Pair
{
    /** @var string */
    private $from;

    /** @var string */
    private $to;

    /**
     * Pair constructor.
     * @param string $from
     * @param string $to
     */
    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    /**
     * @param Pair $pair
     * @return bool
     */
    public function equals($pair): bool
    {
        return $this->from === $pair->from && $this->to === $pair->to;
    }

    /**
     * @return int
     */
    public function hashCode(): int
    {
        return 0;
    }
}