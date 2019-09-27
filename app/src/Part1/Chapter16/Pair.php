<?php
declare(strict_types=1);

namespace Acme\Part1\Chapter16;

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
     * @param Pair $object
     * @return bool
     */
    public function equals($object): bool
    {
        $pair = $object;
        return ($this->from === $pair->from && $this->to === $pair->to);
    }

    /**
     * @return int
     */
    public function hashCode(): int
    {
        return 0;
    }
}
