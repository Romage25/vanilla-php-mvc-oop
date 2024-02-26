<?php

include 'router.php';
include 'controllers/HomeController.php';
include 'controllers/AboutController.php';
include 'controllers/ContactController.php';

$router = new Router();
$router->addRoute('/', 'HomeController');
$router->addRoute('/about', 'AboutController');
$router->addRoute('/contact', 'ContactController');

$url = $_SERVER['REQUEST_URI'];
$router->route($url);
