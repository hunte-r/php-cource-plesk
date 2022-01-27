<?php

namespace Math\Tests;

use PHPUnit\Framework\TestCase;

class Task3Test extends TestCase
{
    /**
     * @dataProvider fibProvider
     */
    public function testFib(int $expectedResult, int $fibIndex): void
    {
        $task3 = (new \Math\Tasks\Task3());
        self::assertEquals($expectedResult, $task3->fib($fibIndex));
    }

    public function fibProvider(): array
    {
        return [
            [0, 0],
            [1, 1],
            [1, 2],
            [2, 3],
            [55, 10],
        ];
    }

    public function testFibNegativeNumber(): void
    {
        $task3 = (new \Math\Tasks\Task3());

        $this->expectException('Exception');
        $task3->fib(-5);
    }
}
