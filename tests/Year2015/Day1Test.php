<?php

namespace alexanderpas\AdventOfCode\Tests\Year2015;

use alexanderpas\AdventOfCode\Solutions\Year2015\Day1 as Puzzle;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class Day1Test extends TestCase
{
    public static function testPart1(): void
    {
        static $checks = [
            '(())' => 0,
            '()()' => 0,
            '(((' => 3,
            '(()(()(' => 3,
            '))(((((' => 3,
            '())' => -1,
            '))(' => -1,
            ')))' => -3,
            ')())())' => -3,
        ];

        foreach ($checks as $input => $solution) {
            $message = 'Puzzle input: ' . $input;
            $outcome = (new Puzzle($input))->getFloor();
            Assert::assertThat($outcome, Assert::equalTo($solution), $message);
        }
    }
}
