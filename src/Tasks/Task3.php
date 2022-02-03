<?php

namespace Math\Tasks;

Class Task3
{
    public function fib(int $fibIndex): int
    {
        if ($fibIndex < 0) {
            throw new \Exception('Input value cannot be a negative number');
        }

        $fibSeries = [0, 1];

        $i = 2;
        while ($i <= $fibIndex) {
            $fibSeries[$i] = $fibSeries[$i - 2] + $fibSeries[$i - 1];
            ++$i;
        }

        return $fibSeries[$fibIndex];
    }
}
