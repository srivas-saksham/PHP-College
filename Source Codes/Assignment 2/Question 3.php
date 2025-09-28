<?php
$a = 10;
$b = 20;

// --- Comparison Operators ---
echo "<h3>Comparison Operators</h3>";
echo "$a == $b : " . (($a == $b) ? "true" : "false") . "<br>";
echo "$a != $b : " . (($a != $b) ? "true" : "false") . "<br>";
echo "$a > $b : " . (($a > $b) ? "true" : "false") . "<br>";
echo "$a < $b : " . (($a < $b) ? "true" : "false") . "<br>";
echo "$a >= $b : " . (($a >= $b) ? "true" : "false") . "<br>";
echo "$a <= $b : " . (($a <= $b) ? "true" : "false") . "<br>";

// --- Logical Operators ---
echo "<h3>Logical Operators</h3>";
$cond1 = ($a > 5);
$cond2 = ($b > 15);

echo "($a > 5) && ($b > 15) : " . (($cond1 && $cond2) ? "true" : "false") . "<br>";
echo "($a > 5) || ($b < 15) : " . (($cond1 || ($b < 15)) ? "true" : "false") . "<br>";
echo "!($a > 5) : " . ((!$cond1) ? "true" : "false") . "<br>";
?>
