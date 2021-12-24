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
