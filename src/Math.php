<?php

namespace Math;

use Math\Logger\LoggerInterface;

class Math
{
    private LoggerInterface $logger;
    
    public function __construct($logger)
    {
        $this->logger = $logger;
    }
    
    public function run(): void
    {
        $msg = 'message';
        $this->logger->info($msg);
        $this->logger->warn($msg);
        $this->logger->err($msg);
        
        echo 'ok';
    }
}
