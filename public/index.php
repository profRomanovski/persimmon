<?php

require __DIR__ . '/../app/bootstrap.php';

$dispatcher = FastRoute\simpleDispatcher('initRoutes');

$route = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

switch ($route[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo '404 Not Found';
        break;

    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo '405 Method Not Allowed';
        break;

    case FastRoute\Dispatcher::FOUND:
        $controller = $route[1][0];
        $method = $route[1][1];
        $parameters = $route[2];
        call_user_func_array([$controller, $method], $parameters);
        //$container->call($controller, $parameters);
        break;
}