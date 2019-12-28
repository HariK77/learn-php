<?php

echo "Enter any numer to check whether it is even or odd : \n";

$num = trim(fgets(STDIN));

if ($num % 2 == 0) {
    echo "$num is odd number";
} else {
    echo "$num is even number";
}

