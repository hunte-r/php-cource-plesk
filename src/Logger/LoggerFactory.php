<?php

namespace Math\Logger;

class LoggerFactory
{
    private array $config;

    // Class instance
    private static ?self $instance = null;
    
    public static function getInstance(array $config = null): self
    {
        if (self::$instance === null) {
            self::$instance = new self($config);
        }
        
        return self::$instance;
    }
    
    private function __construct(array $config)
    {
        $this->config = $config;
    }

    public function createLogger(): LoggerInterface
    {
        switch ($this->config['logger']['type']) {
            case 'stdout':
                return new StdoutLogger();
            case 'file':
                $logFile = $this->config['logger']['filename'];
                return new FileLogger($logFile);
            default:
                return new FakeLogger();
        }
    }
}
