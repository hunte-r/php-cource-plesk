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