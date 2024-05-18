<?php
function countVow($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $countVowel = countVow($string);
    $reversedString = strrev($string);
    printf("Original String: %s, Vowel Count: %d, Reversed String: %s<br>\n", $string, $countVowel, $reversedString);
}
?>
