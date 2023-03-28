<?php

namespace Hrvthzslt\Palindrome\Libraries;

function strrev(string $text): string
{
    $characters = new CharacterChain($text);

    $i = 0;
    $j = $characters->getLength() - 1;

    while ($i < $j) {
        $temp = $characters->getCharacter($i);
        $characters->setCharacter($i, $characters->getCharacter($j));
        $characters->setCharacter($j, $temp);

        $i++;
        $j--;
    }

    return $characters->getValue();
}
