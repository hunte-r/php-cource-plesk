<?php

namespace Math\Tasks;

use Math\Logger\LoggerInterface;

class Task7
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    
    public function isHappy(string $number): bool
    {
        $regex = '/^[0-9]+$/';
        if (!preg_match($regex, $number)) {
            $errorMessage = 'Input value must contain numbers only';
            $this->logger->err("Exception: $errorMessage");
            throw new \Exception($errorMessage);
        }

        $partsSize = strlen($number) / 2;
        if (!is_int($partsSize)) {
            $errorMessage = 'Input value must contain even number of digits';
            $this->logger->err("Exception: $errorMessage");
            throw new \Exception($errorMessage);
        }

        $part1 = substr($number, 0, $partsSize);
        $part2 = substr($number, $partsSize, $partsSize);

        return array_sum(str_split($part1)) === array_sum(str_split($part2));
    }
}
