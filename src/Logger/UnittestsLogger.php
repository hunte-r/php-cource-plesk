<?php

namespace Math\Logger;

class UnittestsLogger extends AbstractLogger implements UnittestsLoggerInterface
{
    private array $logBuffer;

    public function __construct()
    {
        $this->logBuffer = [];
    }
    
    protected function log(string $msg): void
    {
        $this->logBuffer[] = $msg;
    }
    
    public function getLog(): array
    {
        return $this->logBuffer;
    }
}
