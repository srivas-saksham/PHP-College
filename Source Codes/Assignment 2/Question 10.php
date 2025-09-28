<?php
$a = 20;
$b = 5;
$operator = "+"; // Change to -, *, /, %

switch ($operator) {
    case '+':
        echo "$a + $b = " . ($a + $b);
        break;
    case '-':
        echo "$a - $b = " . ($a - $b);
        break;
    case '*':
        echo "$a * $b = " . ($a * $b);
        break;
    case '/':
        if ($b != 0) {
            echo "$a / $b = " . ($a / $b);
        } else {
            echo "Division by zero is not allowed";
        }
        break;
    case '%':
        echo "$a % $b = " . ($a % $b);
        break;
    default:
        echo "Invalid operator";
}
?>
