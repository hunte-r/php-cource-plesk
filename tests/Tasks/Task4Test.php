<?php

namespace Math\Tests;

use Math\Logger\UnittestsLogger;
use PHPUnit\Framework\TestCase;

class Task4Test extends TestCase
{
    /**
     * @dataProvider addDigitsProvider
     */
    public function testAddDigits(int $expectedResult, int $number): void
    {
        $logger = new UnittestsLogger();
        $task4 = (new \Math\Tasks\Task4($logger));
        self::assertEquals($expectedResult, $task4->addDigits($number));
    }

    public function addDigitsProvider(): array
    {
        return [
            [0, 0],
            [9, 9],
            [2, 38],
        ];
    }

    public function testAddDigitsNegativeNumber(): void
    {
        $logger = new UnittestsLogger();
        $task4 = (new \Math\Tasks\Task4($logger));

        $this->expectException('Exception');
        try {
            $task4->addDigits(-79);
        } finally {
            $errorsLog = $logger->getLog();
            $actualExceptionMessage = $errorsLog[0];
            self::assertEquals('[ERR] Exception: Negative numbers are not allowed', $actualExceptionMessage);
        }
    }
}
