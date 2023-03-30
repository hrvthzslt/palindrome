<?php

namespace Hrvthzslt\Palindrome\Test;

use Hrvthzslt\Palindrome\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @dataProvider solutionDataProvider
     */
    public function testSolution(string $word, bool $expectation): void
    {
        $this->assertSame($expectation, (new Solution())->isPalindrome($word));
    }

    public function solutionDataProvider(): array
    {
        return [
            'Radar is a palindrome' => [
                'word' => 'Radar',
                'expectation' => true,
            ],
            'Rotator is a palindrome' => [
                'word' => 'Rotator',
                'expectation' => true,
            ],
            'Palindrome is not a palindrome' => [
                'word' => 'Palindrome',
                'expectation' => false,
            ],
            'Anagram is not a palindrome' => [
                'word' => 'Anagram',
                'expectation' => false,
            ],
        ];
    }
}