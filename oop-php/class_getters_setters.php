<?php

class Cars {

    private $wheels = 4;

    function get_values() {

        echo $this->wheels;
    
    }
    
    function set_values() {
    
        echo $this->wheels = 10;
    
    }

}



$car = new Cars();

$car->get_values();

$car->set_values();


?>