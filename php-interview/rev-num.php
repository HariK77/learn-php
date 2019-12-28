<?php



$rev_num = 0;

$ori_num = 75;

$num = $ori_num;

while ($num >= 1) {
    $remain = $num % 10;
    $rev_num = $rev_num * 10 + $remain;
    $num /= 10;
}

echo "Reverse of $ori_num is $rev_num";