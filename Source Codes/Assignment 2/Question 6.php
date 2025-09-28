<?php
$num = 17;
$isPrime = true;

if ($num <= 1) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

echo $num . ($isPrime ? " is a Prime number" : " is NOT a Prime number");
?>
