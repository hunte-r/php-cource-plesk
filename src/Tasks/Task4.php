<?php

namespace Math\Tasks;

Class Task4
{
    public function addDigits(int $number): int
    {
        if ($number < 0) {
            throw new \Exception('Negative numbers are not allowed');
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
}
