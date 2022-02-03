<?php

namespace Math\Tasks;

use Math\Logger\LoggerInterface;

class Task4
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    
    public function addDigits(int $number): int
    {
        if ($number < 0) {
            $errorMessage = 'Negative numbers are not allowed';
            $this->logger->err("Exception: $errorMessage");
            throw new \Exception($errorMessage);
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
