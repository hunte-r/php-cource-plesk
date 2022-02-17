<?php

namespace Math\Tests;

use Math\Logger\UnittestsLogger;
use PHPUnit\Framework\TestCase;

class Task3Test extends TestCase
{
    /**
     * @dataProvider fibProvider
     */
    public function testFib(int $expectedResult, int $fibIndex): void
    {
        $logger = new UnittestsLogger();
        $task3 = (new \Math\Tasks\Task3($logger));
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
        $logger = new UnittestsLogger();
        $task3 = (new \Math\Tasks\Task3($logger));

        $this->expectException('Exception');
        try {
            $task3->fib(-5);
        } finally {
            $errorsLog = $logger->getLog();
            $actualExceptionMessage = $errorsLog[0];
            self::assertEquals('[ERR] Exception: Input value cannot be a negative number', $actualExceptionMessage);
        }
    }
}
