<?php

namespace Math\Tasks;

Class Task1
{
    function binarySum(string $binA, string $binB): string
    {
        // Check if input arguments are binary
        $regex = '/^[01]+$/';

        if ((!preg_match($regex, $binA)) || (!preg_match($regex, $binB))) {
            throw new \Exception('At least one input argument is not binary');
        }

        $decimalResult = bindec($binA) + bindec($binB);

        return decbin($decimalResult);
    }
}
