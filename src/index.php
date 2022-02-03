<?php

require_once __DIR__ . '/../vendor/autoload.php';

//echo (new \Math\Tasks\Task1())->binarySum('111', '100');

//echo (int)(new \Math\Tasks\Task2())->isPowerOfThree(27);

//echo (new \Math\Tasks\Task3())->fib(10);

//echo (new \Math\Tasks\Task4())->addDigits(123);

//echo (int)(new \Math\Tasks\Task5())->isBalanced('(()())');

//echo (int)(new \Math\Tasks\Task6())->isPerfect(6);

//echo (int)(new \Math\Tasks\Task7())->isHappy('123123');

print_r((new \Math\Tasks\Task8())->generateFizzBuzz(11, 20));
