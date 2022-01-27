<?php

namespace Math\Tests;

use PHPUnit\Framework\TestCase;

class Task4Test extends TestCase
{
    /**
     * @dataProvider AddDigitsProvider
     */
    public function testAddDigits(int $expectedResult, int $number): void
    {
        $task4 = (new \Math\Tasks\Task4());
        self::assertEquals($expectedResult, $task4->addDigits($number));
    }

    public function AddDigitsProvider(): array
    {
        return [
            [0, 0],
            [9, 9],
            [2, 38],
        ];
    }

    public function testAddDigitsNegativeNumber(): void
    {
        $task4 = (new \Math\Tasks\Task4());

        $this->expectException('Exception');
        $task4->addDigits(-79);
    }
}
