<?php

namespace Math\Logger;

abstract class AbstractLogger implements LoggerInterface
{
    abstract protected function log(string $msg): void;

    public function info(string $msg): void
    {
        $this->log('[INF] ' . $msg);
    }

    public function warn(string $msg): void
    {
        $this->log('[WARN] ' . $msg);
    }

    public function err(string $msg): void
    {
        $this->log('[ERR] ' . $msg);
    }
}
