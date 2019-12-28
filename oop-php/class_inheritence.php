<?php

class Cars {
    var $wheels = 4;

    function greeting() {
        echo "Hello";
    }

}

$car = new Cars();

class Trucks extends Cars {

}

$tacoma = new Trucks();

echo $tacoma->wheels;

$tacoma->greeting();
?>