<?php

namespace Math\Tests;

use Math\Logger\UnittestsLogger;
use PHPUnit\Framework\TestCase;

class Task7Test extends TestCase
{
    /**
     * @dataProvider isHappyProvider
     */
    public function testIsHappy(bool $expectedResult, string $number): void
    {
        $logger = new UnittestsLogger();
        $task7 = (new \Math\Tasks\Task7($logger));
        self::assertEquals($expectedResult, $task7->isHappy($number));
    }

    public function isHappyProvider(): array
    {
        return [
            [true, '123321'],
            [false, '123322'],
            [true, '00'],
            [false, '01'],
        ];
    }
    
    /**
     * @dataProvider isHappyWrongSymbolsProvider
     */
    public function testIsHappyWrongSymbols(string $number, string $expectedExceptionMessage): void
    {
        $logger = new UnittestsLogger();
        $task7 = (new \Math\Tasks\Task7($logger));

        $this->expectException('Exception');
        try {
            $task7->isHappy($number);
        } finally {
            $errorsLog = $logger->getLog();
            $actualExceptionMessage = $errorsLog[0];
            self::assertEquals($expectedExceptionMessage, $actualExceptionMessage);
        }
    }

    public function isHappyWrongSymbolsProvider(): array
    {
        $exceptionMessage = '[ERR] Exception: Input value must contain numbers only';
        
        return [
            ['', $exceptionMessage],
            ['abc', $exceptionMessage]
        ];
    }
    
    public function testIsHappyOdd(): void
    {
        $logger = new UnittestsLogger();
        $task7 = (new \Math\Tasks\Task7($logger));

        $this->expectException('Exception');
        try {
            $task7->isHappy('12332');
        } finally {
            $errorsLog = $logger->getLog();
            $actualExceptionMessage = $errorsLog[0];
            self::assertEquals(
                '[ERR] Exception: Input value must contain even number of digits',
                $actualExceptionMessage
            );
        }
    }
}
