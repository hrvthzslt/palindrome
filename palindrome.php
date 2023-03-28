<?php
//
//function isPalindrome(string $text): bool
//{
//    return strtolower($text) === strtolower(strrev($text));
//}
//
//var_dump(isPalindrome('asddsa'));
//
//// ---
//
//function isPalindromeDeeper(string $text): bool
//{
//    return strtolower($text) === strtolower(my_strrev($text));
//}
//
//function mystrrev(string $text)
//{
//    $characters = str_split($text);
//
//    $i = 0;
//    $j = count($characters) - 1;
//
//    while ($i < $j) {
//        $temp = $characters[$i];
//        $characters[$i] = $characters[$j];
//        $characters[$j] = $temp;
//
//        $i++;
//        $j--;
//    }
//
//    return implode($characters);
//}
//
//var_dump(isPalindromeDeeper('asddsa'));
//
//// ----
//
//function isPalindromeMoreDeeper(string $text): bool
//{
//    var_dump(mystrtolower($text));
//
//    return mystrtolower($text) === mystrtolower(my_strrev($text));
//}
//
//function mystrtolower(string $text): string
//{
//    $abc = range('a', 'z');
//    $ABC = range('A', 'Z');
//
//    $characters = str_split($text);
//
//    foreach ($characters as $i => $character) {
//        if (false !== $j = my_array_search($character, $ABC)) {
//            $characters[$i] = $abc[$j];
//        }
//    }
//
//    return implode($characters);
//}
//
//function my_array_search($needle, array $haystack): int|bool
//{
//    $low = 0;
//    $high = count($haystack);
//
//    while ($low < $high) {
//        $mid = floor(($low + $high) / 2);
//        $value = $haystack[$mid];
//
//        if ($needle === $value) {
//            return $mid;
//        } elseif ($needle < $value) {
//            $high = $mid;
//        } else {
//            $low = $mid + 1;
//        }
//    }
//
//    return false;
//}
//
//var_dump(isPalindromeMoreDeeper('AsddSa'));
//
//// ---
//
//class MyCharacterChain
//{
//    private string $value;
//    private int $length;
//
//    public function __construct(string $text)
//    {
//        $this->value = $text;
//        $this->length = strlen($text);
//    }
//
//    public function getValue(): string
//    {
//        return $this->value;
//    }
//
//    public function getLength(): int
//    {
//        return $this->length;
//    }
//
//    public function getCharacter(int $i): string
//    {
//        return substr($this->value, $i, 1);
//    }
//
//    public function setCharacter(int $i, string $char): void
//    {
//        $this->value = substr_replace($this->value, substr($char, 0, 1), $i, 1);
//    }
//}
//
//function isPalindromeMostDeeper(string $text): bool
//{
//    return my_strtolower($text) === my_strtolower(my_strrev($text));
//}
//
//function mystrrev2(string $text): string
//{
//    $characters = new MyCharacterChain($text);
//
//    $i = 0;
//    $j = $characters->getLength() - 1;
//
//    while ($i < $j) {
//        $temp = $characters->getCharacter($i);
//        $characters->setCharacter($i, $characters->getCharacter($j));
//        $characters->setCharacter($j, $temp);
//
//        $i++;
//        $j--;
//    }
//
//    return $characters->getValue();
//}
//
//
//function mystrtolower2(string $text): string
//{
//    $characters = new MyCharacterChain($text);
//    $abc = range('a', 'z');
//    $ABC = range('A', 'Z');
//
//    for ($i = 0; $i < $characters->getLength(); $i++) {
//        if (false !== $j = my_array_search2($characters->getCharacter($i), $ABC)) {
//            $characters->setCharacter($i, $abc[$j]);
//        }
//    }
//
//    return $characters->getValue();
//}
//
//function my_array_search2($needle, array $haystack): int|bool
//{
//    $characters = new MyCharacterChain(implode($haystack));
//    $low = 0;
//    $high = $characters->getLength();
//
//    while ($low < $high) {
//        $mid = floor(($low + $high) / 2);
//        $value = $characters->getCharacter($mid);
//
//        if ($needle === $value) {
//            return $mid;
//        } elseif ($needle < $value) {
//            $high = $mid;
//        } else {
//            $low = $mid + 1;
//        }
//    }
//
//    return false;
//}
//
//var_dump(isPalindromeMostDeeper('AsddSa'));
