<?php

class Cars {

    static $wheels = 4;
    static $doors = 5;

    static function car_detail() {
        echo Cars::$wheels.'<br>';
        echo Cars::$doors.'<br>';

    }
}


echo Cars::$doors.'<br>';
echo '<br>';
Cars::car_detail();


?>