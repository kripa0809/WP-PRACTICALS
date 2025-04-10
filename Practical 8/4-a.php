<?php
$year = date("Y"); // Get current year

echo "Current Year: $year<br>";

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "$year is a Leap Year.";
} else {
    echo "$year is Not a Leap Year.";
}
?>