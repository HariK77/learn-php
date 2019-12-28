<?php 


if(!empty($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']);
    $greeting = "Hello, $name";
} else {
    $greeting = "Hello Guest ";
}


require 'index.view.php';