<?php

class Cars {

    public $wheels = 4;
    private $doors = 5;
    protected $seats = 2;

    function car_detail() {
        echo $this->wheels.'<br>';
        echo $this->doors.'<br>';
        echo $this->seats.'<br><br>';

    }
}

$car = new Cars();


$car->car_detail();

echo $car->wheels.'<br>';
echo $car->doors.'<br>';
echo $car->seats.'<br>';



?>
