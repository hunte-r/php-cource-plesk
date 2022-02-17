<?php

use Math\Logger\LoggerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$config = require(__DIR__ . '/../config.php');

$loggerFactory = LoggerFactory::getInstance($config);
$logger = $loggerFactory->createLogger();

//echo (new \Math\Tasks\Task1($logger))->binarySum('111', '100');
//echo (int)(new \Math\Tasks\Task2())->isPowerOfThree(27);
//echo (new \Math\Tasks\Task3($logger))->fib(-10);
//echo (new \Math\Tasks\Task4($logger))->addDigits(-123);
//echo (int)(new \Math\Tasks\Task5($logger))->isBalanced('(()())p');
//echo (int)(new \Math\Tasks\Task6())->isPerfect(6);
echo (int)(new \Math\Tasks\Task7($logger))->isHappy('123123');
//print_r((new \Math\Tasks\Task8())->generateFizzBuzz(11, 20));
