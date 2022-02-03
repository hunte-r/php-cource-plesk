<?php

namespace Math\Tests;

use PHPUnit\Framework\TestCase;

class Task2Test extends TestCase
{
    /**
     * @dataProvider isPowerOfThreeProvider
     */
    public function testIsPowerOfThree(bool $expectedResult, int $number): void
    {
        $task2 = (new \Math\Tasks\Task2());
        self::assertEquals($expectedResult, $task2->isPowerOfThree($number));
    }

    public function isPowerOfThreeProvider(): array
    {
        return [
            [true, 1],
            [true, 3],
            [true, 9],
            [false, 4],
            [false, -5],
            [false, 0],
        ];
    }
}
