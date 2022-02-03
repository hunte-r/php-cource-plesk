<?php

namespace Math\Tasks;

use Math\Logger\LoggerInterface;

class Task1
{
    private LoggerInterface $logger;
    
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    
    public function binarySum(string $binA, string $binB): string
    {
        // Check if input arguments are binary
        $regex = '/^[01]+$/';

        if ((!preg_match($regex, $binA)) || (!preg_match($regex, $binB))) {
            $errorMessage = 'At least one input argument is not binary';
            $this->logger->err("Exception: $errorMessage");
            throw new \Exception($errorMessage);
        }

        $decimalResult = bindec($binA) + bindec($binB);

        return decbin($decimalResult);
    }
}
