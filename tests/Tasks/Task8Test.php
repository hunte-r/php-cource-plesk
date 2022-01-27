<?php

namespace Math\Tests;

use PHPUnit\Framework\TestCase;

class Task8Test extends TestCase
{
    /**
     * @dataProvider fizzBuzzProvider
     */
    public function testFizzBuzz(string $expectedResult, int $begin, int $end): void
    {
        $task8 = (new \Math\Tasks\Task8());
        self::assertEquals($expectedResult, $task8->generateFizzBuzz($begin, $end));
    }

    public function fizzBuzzProvider(): array
    {
        return [
            ['11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz', 11, 20],
            ['FizzBuzz', 15, 15],
            ['14', 14, 14],
            ['', 1000, 100],
        ];
    }
}
