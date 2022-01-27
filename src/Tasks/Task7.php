<?php

namespace Math\Tasks;

class Task7
{
    public function isHappy(string $number): bool
    {
        $regex = '/^[0-9]+$/';
        if (!preg_match($regex, $number)) {
            throw new \Exception('Input value must contain numbers only');
        }

        $partsSize = strlen($number) / 2;
        if (!is_int($partsSize)) {
            throw new \Exception('Input value must contain even number of digits');
        }

        $part1 = substr($number, 0, $partsSize);
        $part2 = substr($number, $partsSize, $partsSize);

        return array_sum(str_split($part1)) === array_sum(str_split($part2));
    }
}
