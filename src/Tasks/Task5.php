<?php

namespace Math\Tasks;

Class Task5
{
    public function isBalanced(string $string): bool
    {
        if ($string === '') {
            return true;
        }

        // Check if input string contains only round brackets
        $regex = '/^[()]+$/';
        if (!preg_match($regex, $string)) {
            throw new \Exception('Incorrect format of the input string');
        }

        $position = strpos($string, '()');
        while ($position !== false) {
            $string = substr_replace($string, '', $position, 2);
            $position = strpos($string, '()');
        }

        return $string === '';
    }
}
