<?php


function arm($num) {

    $number = $num;
    $temp = $number;
    $sum = 0;

    while ($temp != 0) {
        $remainder = $temp % 10;
        $sum += ($remainder*$remainder*$remainder);
        $temp /= 10; 
    }

    if ($sum == $number) {
        return "$number is an Armstrong Number.\n";
    } else {
        return "$number is not an Armstrong Number.\n";
    }
}

$num = rtrim(fgets(STDIN));

echo arm($num);

?>
