<?php


class Animal
{
    private $family, $food;

    public function __construct($family, $food)
    {
        $this->family = $family;
        $this->food = $food;
    }

    public function getFamly()
    {
        return $this->family;
    }

    public function setFamly($family)
    {
        $this->family = $family;
    }

    public function getFood()
    {
        return $this->food;
    }

    public function setFood($food)
    {
        $this->food = $food;
    }
}