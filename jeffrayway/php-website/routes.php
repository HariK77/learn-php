<?php



// $router->define([
//     '' => 'controllers/index.php',
//     'about' => 'controllers/about.php',
//     'about/culture' => 'controllers/about-culture.php',
//     'contact' => 'controllers/contact.php',
//     'names' => 'controllers/add-names.php'
// ]);

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('about/culture', 'PagesController@aboutCulture');

$router->post('names', 'PagesController@names');

// var_dump($router->routes);