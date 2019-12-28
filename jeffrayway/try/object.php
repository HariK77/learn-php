<?php

require 'animal.php';
require 'cow.php';
require 'lion.php';

$cow = new Cow('Herbivore', 'Grass');

$lion = new Lion('Carnivore', 'Meat');


echo "<b>Cow Object</b> <br>";

echo "The Cow belongs to ". $cow->getFamly() . " family and eats " . $cow->getFood() . "<br>";

echo "<b>Lion Object</b> <br>";

echo "The Lion belongs to ". $lion->getFamly() . " family and eats " . $lion->getFood() . "<br>";
