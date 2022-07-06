<?php

use FastRoute\RouteCollector;
use Persimmon\Main\Controller\ArticleController;
use Persimmon\Main\Controller\HomeController;

function initRoutes(RouteCollector $r){
    $r->addRoute('GET', '/',  [HomeController::class, 'execute']);
    $r->addRoute('GET', '/article', [ArticleController::class, 'execute']);
}