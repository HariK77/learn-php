<?php



$a = 23;
$b = 45;

echo "Before swapping a = $a and b = $b <br>";

$b = $a + $b;

$a = $b - $a;

$b = $b - $a;

echo "After swapping a = $a and b = $b";