<?php


function insertion_sort($array)
{
    for ($i = 0; $i < count($array); $i++) {
        $val = $array[$i];
        $j = $i - 1;
        while ($j >= 0 && $array[$j] > $val) {
            $array[$j + 1] = $array[$j];
            $j--;
        }
        $array[$j + 1] = $val;
    }

    return $array;
}

$test_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(', ', $test_array);
echo "\nSorted Array :\n";
echo implode(', ', insertion_Sort($test_array));
