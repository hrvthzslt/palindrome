<?php

namespace Hrvthzslt\Palindrome;

use function Hrvthzslt\Palindrome\Libraries\strrev;
use function Hrvthzslt\Palindrome\Libraries\strtolower;

class Solution
{
    public function isPalindrome(string $text): bool
    {
        return strtolower($text) === strtolower(strrev($text));
    }
}
