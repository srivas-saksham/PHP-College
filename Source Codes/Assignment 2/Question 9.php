<?php
$char = 'e';
$char = strtolower($char);

switch ($char) {
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
        echo "$char is a vowel";
        break;
    default:
        echo "$char is NOT a vowel";
}
?>
