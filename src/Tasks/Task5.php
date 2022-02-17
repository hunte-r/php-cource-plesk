<?php

namespace Math\Tasks;

use Math\Logger\LoggerInterface;

class Task5
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    
    public function isBalanced(string $string): bool
    {
        if ($string === '') {
            return true;
        }

        // Check if input string contains only round brackets
        $regex = '/^[()]+$/';
        if (!preg_match($regex, $string)) {
            $errorMessage = 'Incorrect format of the input string';
            $this->logger->err("Exception: $errorMessage");
            throw new \Exception($errorMessage);
        }

        $position = strpos($string, '()');
        while ($position !== false) {
            $string = substr_replace($string, '', $position, 2);
            $position = strpos($string, '()');
        }

        return $string === '';
    }
}
