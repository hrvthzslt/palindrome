<?php

namespace Hrvthzslt\Palindrome\Libraries;

class CharacterChain
{
    private string $value;
    private int $length;

    public function __construct(string $text)
    {
        $this->value = $text;
        $this->length = strlen($text);
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function getCharacter(int $i): string
    {
        return substr($this->value, $i, 1);
    }

    public function setCharacter(int $i, string $char): void
    {
        $this->value = substr_replace($this->value, substr($char, 0, 1), $i, 1);
    }

}