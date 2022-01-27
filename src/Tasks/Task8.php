<?php

namespace Math\Tasks;

Class Task8
{
    public function generateFizzBuzz(int $begin, int $end): string
    {
        $fizBuzz = [];
        for ($i = $begin; $i <= $end; $i++) {
            $isFizz = $i % 3 === 0;
            $isBuzz = $i % 5 === 0;

            if ($isFizz && $isBuzz) {
                $fizBuzz[] = 'FizzBuzz';
                continue;
            }

            if ($isFizz) {
                $fizBuzz[] = 'Fizz';
                continue;
            }

            if ($isBuzz) {
                $fizBuzz[] = 'Buzz';
                continue;
            }

            $fizBuzz[] = $i;
        }
        
        return implode(' ', $fizBuzz);
    }

    public function fizzBuzz(int $begin, int $end): void
    {
        echo $this->generateFizzBuzz($begin,$end);
    }
}
