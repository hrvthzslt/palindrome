<?php

namespace Hrvthzslt\Palindrome\Libraries;

function strtolower(string $text): string
{
    $characters = new CharacterChain($text);
    $abc = range('a', 'z');
    $ABC = range('A', 'Z');

    for ($i = 0; $i < $characters->getLength(); $i++) {
        if (false !== $j = array_search($characters->getCharacter($i), $ABC)) {
            $characters->setCharacter($i, $abc[$j]);
        }
    }

    return $characters->getValue();
}
