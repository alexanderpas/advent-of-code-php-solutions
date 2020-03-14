<?php

namespace alexanderpas\AdventOfCode\Solutions\Year2015;

class Day1
{
    /** @var string */
    protected $puzzle;

    public function __construct(string $input)
    {
        $this->puzzle = $input;
    }

    public function getFloor(): int
    {
        $up = substr_count($this->puzzle, '(');
        $down = substr_count($this->puzzle, ')');
        return $up - $down;
    }
}
