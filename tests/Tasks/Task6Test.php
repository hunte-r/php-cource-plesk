<?php

namespace Math\Tests;

use PHPUnit\Framework\TestCase;

class Task6Test extends TestCase
{
    /**
     * @dataProvider isIsPerfectProvider
     */
    public function testIsPerfect(bool $expectedResult, int $number): void
    {
        $task6 = (new \Math\Tasks\Task6());
        self::assertEquals($expectedResult, $task6->isPerfect($number));
    }

    public function isIsPerfectProvider(): array
    {
        return [
            [true, 6],
            [true, 28],
            [true, 496],
            [false, 7],
            [false, 0],
            [false, -124],
        ];
    }
}
