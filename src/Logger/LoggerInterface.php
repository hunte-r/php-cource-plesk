<?php

namespace Math\Logger;

interface LoggerInterface
{
    public function info(string $msg): void;

    public function warn(string $msg): void;
    
    public function err(string $msg): void;
}
