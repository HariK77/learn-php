<?php

class Cars {

    var $wheels = 4;
    var $doors = 6;

    function car_detail() {
        echo "These car has ".$this->wheels." wheels";
    }

}

$car1 = new Cars();

$car2 = new Cars();

echo " Car 1 wheel count ".$car1->wheels = 6;
echo "<br>";
echo " Car 2 wheel count ".$car2->wheels;
echo "<br>";
echo $car2->car_detail();



?>