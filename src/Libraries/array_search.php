<?php

namespace Hrvthzslt\Palindrome\Libraries;

function array_search($needle, array $haystack): int|bool
{
    $characters = new CharacterChain(implode($haystack));
    $low = 0;
    $high = $characters->getLength();

    while ($low < $high) {
        $i = floor(($low + $high) / 2);
        $value = $characters->getCharacter($i);

        if ($needle === $value) {
            return $i;
        } elseif ($needle < $value) {
            $high = $i;
        } else {
            $low = $i + 1;
        }
    }

    return false;
}
