<?php
// ----- Part A: Using Conditional/Ternary Operator -----
$a = 10;
$b = 25;
$c = 15;

$maxTernary = ($a > $b) ? (($a > $c) ? $a : $c) : (($b > $c) ? $b : $c);

echo "<h3>Using Ternary Operator</h3>";
echo "Numbers: $a, $b, $c<br>";
echo "Maximum is: $maxTernary<br><br>";

// ----- Part B: Using if...else -----
if ($a >= $b && $a >= $c) {
    $maxIf = $a;
} 
elseif ($b >= $a && $b >= $c) {
    $maxIf = $b;
} 
else {
    $maxIf = $c;
}

echo "<h3>Using if...else</h3>";
echo "Numbers: $a, $b, $c<br>";
echo "Maximum is: $maxIf";
?>