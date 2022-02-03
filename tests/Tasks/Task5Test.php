<?php

namespace Math\Tests;

use Math\Logger\UnittestsLogger;
use PHPUnit\Framework\TestCase;

class Task5Test extends TestCase
{
    /**
     * @dataProvider isBalancedProvider
     */
    public function testIsBalanced(bool $expectedResult, string $string): void
    {
        $logger = new UnittestsLogger();
        $task5 = (new \Math\Tasks\Task5($logger));
        self::assertEquals($expectedResult, $task5->isBalanced($string));
    }

    public function isBalancedProvider(): array
    {
        return [
            [true, ''],
            [true, '()()()'],
            [true, '((()))'],
            [true, '(()())'],
            [false, ')()'],
            [false, '()())'],
        ];
    }

    public function testIsBalancedWrongInput(): void
    {
        $logger = new UnittestsLogger();
        $task5 = (new \Math\Tasks\Task5($logger));

        $this->expectException('Exception');
        try {
            $task5->isBalanced('(nok)');
        } finally {
            $errorsLog = $logger->getLog();
            $actualExceptionMessage = $errorsLog[0];
            self::assertEquals('[ERR] Exception: Incorrect format of the input string', $actualExceptionMessage);
        }
    }
}
