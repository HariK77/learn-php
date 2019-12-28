<?php


$check = 0;

$num = 1;

for ($i = 2; $i <= $num; $i++) {
    if ($num % $i == 0) {
        $check++;
    }
}

if($check < 3) {
    echo "It is a Prime Number";
} else {
    echo "It is not a Prime Number";
}