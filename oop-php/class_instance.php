<?php

class Cars {

    function greeting() {

        echo "Hi ! There What's up !!!!";

    }

    function greeting2() {

        echo "Hi ! There What's up !!!!  (2)";

    }


}

$test = new Cars();
$test2 = new Cars();

$test->greeting();
echo "<br>";
$test->greeting2();

?>