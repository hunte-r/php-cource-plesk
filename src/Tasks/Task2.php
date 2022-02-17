<?php

namespace Math\Tasks;

class Task2
{
    public function isPowerOfThree(int $number): bool
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
}
