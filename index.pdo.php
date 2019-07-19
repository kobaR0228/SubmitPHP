<?php

$query = require 'core/bootstrap.php';

$router = new Router;

require 'routes.php';


require $router->direct('about');

var_dump($_SERVER['REQUEST_URI']);







