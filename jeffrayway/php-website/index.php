<?php

require 'vendor/autoload.php';

require 'core/bootstrap.php';

// $router = new Router;
 
// require 'routes.php';

// $uri = trim($_SERVER['REQUEST_URI'], '/');

// // die(var_dump($uri));

// require $router->direct($uri);

// die(var_dump($app));


Router::load('routes.php')->direct(Request::uri(), Request::method());


// $router = Router::load('routes.php');

// $router->direct($uri);