<?php

namespace Math\Tasks;

Class Task6
{
    public function isPerfect(int $number): bool
    {
        if ($number <= 0) {
            return false;
        }

        $i = 1;
        $dividers = [];
        while ($i < $number) {
            if ($number % $i === 0) {
                $dividers[] = $i;
            }
            ++$i;
        }

        return array_sum($dividers) === $number;
    }
}
