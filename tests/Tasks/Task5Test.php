<?php

namespace Math\Tests;

use PHPUnit\Framework\TestCase;

class Task5Test extends TestCase
{
    /**
     * @dataProvider isBalancedProvider
     */
    public function testIsBalanced(bool $expectedResult, string $string): void
    {
        $task5 = (new \Math\Tasks\Task5());
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
        $task5 = (new \Math\Tasks\Task5());

        $this->expectException('Exception');
        $task5->isBalanced('(nok)');
    }
}
