<?php

namespace Math\Tests;

use Math\Logger\UnittestsLogger;
use PHPUnit\Framework\TestCase;

class Task1Test extends TestCase
{
    /**
     * @dataProvider BinarySumProvider
     */
    public function testBinarySum(string $expectedResult, string $binA, string $binB): void
    {
        $logger = new UnittestsLogger();
        $task1 = (new \Math\Tasks\Task1($logger));
        
        $actual = $task1->binarySum($binA, $binB);
        
        self::assertEquals($expectedResult, $actual);
    }
    
    public function binarySumProvider(): array
    {
        return [
            ['1011', '111', '100'],
            ['10011', '1101', '110'],
            ['1110', '01', '1101'],
        ];
    }

    /**
     * @dataProvider binarySumWrongInputProvider
     */
    public function testBinarySumWrongInput(string $binA, string $binB, string $expectedExceptionMessage): void
    {
        $logger = new UnittestsLogger();
        $task1 = (new \Math\Tasks\Task1($logger));
        
        $this->expectException('Exception');
        try {
            $task1->binarySum($binA, $binB);
        } finally {
            $errorsLog = $logger->getLog();
            $actualExceptionMessage = $errorsLog[0];
            self::assertEquals($expectedExceptionMessage, $actualExceptionMessage);
        }
    }

    public function binarySumWrongInputProvider(): array
    {
        $exceptionMessage = '[ERR] Exception: At least one input argument is not binary';
        return [
            ['abc', '100', $exceptionMessage],
            ['100', 'bca', $exceptionMessage],
            ['', 'bca', $exceptionMessage],
            ['100', '', $exceptionMessage],
        ];
    }
}
