<?php

namespace Math\Tests;

use PHPUnit\Framework\TestCase;

class Task1Test extends TestCase
{
    /**
     * @dataProvider BinarySumProvider
     */
    public function testBinarySum(string $expectedResult, string $binA, string $binB): void
    {
        $task1 = (new \Math\Tasks\Task1());
        
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
    public function testBinarySumWrongInput(string $binA, string $binB): void
    {
        $task1 = (new \Math\Tasks\Task1());
        
        $this->expectException('Exception');
        $task1->binarySum($binA, $binB);
    }

    public function binarySumWrongInputProvider(): array
    {
        return [
            ['abc', '100'],
            ['100', 'bca'],
            ['', 'bca'],
            ['100', ''],
        ];
    }
}
