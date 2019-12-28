<?php

$first = 0;
$second = 1;

echo "{$first}, {$second}, ";

for ($i = 0; $i < 8; $i++) {
    $third = $first + $second;
    echo "{$third}, ";
    $first = $second;
    $second = $third;
}


