<?php

use Hrvthzslt\Palindrome\Solution;

require __DIR__ . '/vendor/autoload.php';

$solution = new Solution();

var_dump($solution->isPalindrome('tattarrattat'));
var_dump($solution->isPalindrome('palindrome'));
