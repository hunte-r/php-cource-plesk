<?php

namespace Math\Logger;

class StdoutLogger extends AbstractLogger
{
    protected function log(string $msg): void
    {
        echo $msg, PHP_EOL;
    }
}
