<?php


$array = [0, 0, -3, 7];


$greatest = 0;

foreach ($array as  $value) {
    if ($value > $greatest) {
        $greatest = $value;
    }
}

echo "Largest number in the array is $greatest";