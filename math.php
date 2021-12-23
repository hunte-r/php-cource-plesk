<?php

function binarySum(string $binA, string $binB): string
{
    // Check if input arguments are binary
    $regex = '/^[01]+$/';

    if ((!preg_match($regex, $binA)) || (!preg_match($regex, $binB))) {
        return "At least one input argument is not binary\n";
    }

    $decimalResult = bindec($binA) + bindec($binB);

    return decbin($decimalResult);
}

function fib(int $fibIndex): int
{
    if ($fibIndex < 0) {
        print_r("Error: input argument is a negative number\n");
        return -1;
    }

    $fibSeries = [0, 1];

    $i = 2;
    while ($i <= $fibIndex) {
        $fibSeries[$i] = $fibSeries[$i - 2] + $fibSeries[$i - 1];
        ++$i;
    }

    return $fibSeries[$fibIndex];
}
