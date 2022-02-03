<?php

namespace Math\Tasks;

use Math\Logger\LoggerInterface;

class Task3
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    
    public function fib(int $fibIndex): int
    {
        if ($fibIndex < 0) {
            $errorMessage = 'Input value cannot be a negative number';
            $this->logger->err("Exception: $errorMessage");
            throw new \Exception($errorMessage);
        }

        $fibSeries = [0, 1];

        $i = 2;
        while ($i <= $fibIndex) {
            $fibSeries[$i] = $fibSeries[$i - 2] + $fibSeries[$i - 1];
            ++$i;
        }

        return $fibSeries[$fibIndex];
    }
}
