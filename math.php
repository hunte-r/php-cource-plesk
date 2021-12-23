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

function isPowerOfThree(int $number): bool
{
    if ($number === 1) {
        return true;
    }

    if ($number <= 0) {
        return false;
    }
    
    $i = $number;
    while ($i > 1) {
        $divisionResult = $i / 3;

        if ($divisionResult === 1) {
            return true;
        }

        if (is_float($divisionResult)) {
            return false;
        }

        $i = $divisionResult;
    }

    return false;
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
    
function addDigits(int $number)
{
    if ($number < 0) {
        return "Negative numbers are not allowed";
    }

    // Split input number to digits and put them to array
    $digitsArray = str_split((string)$number);
    
    // If the number contains only one digit, return the number as is
    if (count($digitsArray) === 1) {
        return $number;
    }

    $result = 0;
    while (count($digitsArray) > 1) {
        $result = array_sum($digitsArray);
        $digitsArray = str_split((string)$result);
    }
    
    return $result;
}
