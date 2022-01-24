<?php

use Matth\ProjectWithRooter\Controller\Controller;
use Scrirock\Router\Route;
use Scrirock\Router\Router;

require "../vendor/autoload.php";

$router = new Router();

$homeRoute = new Route("home", "/", [Controller::class, "homePage"]);
$router->add($homeRoute);

$articleRoute = new Route("article", "/article/{id}", [Controller::class, "articlePage"]);
$router->add($articleRoute);

if (isset($_GET['route']) && $_GET['route'] === 'article') {
    if (isset($_GET['id'])) $router->call("/article/".$_GET['id']);
}
else {
    $router->call('/');
}