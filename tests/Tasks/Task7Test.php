<?php

namespace Math\Tests;

use PHPUnit\Framework\TestCase;

class Task7Test extends TestCase
{
    /**
     * @dataProvider isHappyProvider
     */
    public function testIsHappy(bool $expectedResult, string $number): void
    {
        $task7 = (new \Math\Tasks\Task7());
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
     * @dataProvider IsHappyWrongSymbolsProvider
     */
    public function testIsHappyWrongSymbols(string $number): void
    {
        $task7 = (new \Math\Tasks\Task7());

        $this->expectException('Exception');
        $task7->isHappy($number);
    }

    public function IsHappyWrongSymbolsProvider(): array
    {
        return [
            [''],
            ['abc']
        ];
    }
    
    public function testIsHappyOdd(): void
    {
        $task7 = (new \Math\Tasks\Task7());

        $this->expectException('Exception');
        $task7->isHappy('12332');
    }
}
