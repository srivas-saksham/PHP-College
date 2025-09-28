<?php
$year = date("Y");

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "$year is a Leap Year";
} else {
    echo "$year is NOT a Leap Year";
}
?>
