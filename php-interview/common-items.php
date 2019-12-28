<?php

$array = [1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5];

$final_array = [];

foreach ($array as $arr) {

    if (array_key_exists($arr, $final_array)) {
        $final_array[$arr] += 1; 
    }
    else {
        $final_array[$arr] = 1;
    }

}

print_r($final_array);






?>