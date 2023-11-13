<?php

namespace app\core;

define('CONTROLLERS_NAMESPACE', 'app\\controllers\\');

class Route
{
  public static function start()
  {
    $controllerClassName = "home";
    $actionName = 'index';
    $payload = [];
    $routes = explode("/", $_SERVER["REQUEST_URI"]);

    $controllerClassName = empty($routes[1]) ? 'home' : $routes[1];

    $actionName = empty($routes[2]) ? 'index' : $routes[2];

    $payload = !empty($routes[3]) ? array_slice($routes, 3) : [];
    $controllerName = CONTROLLERS_NAMESPACE . ucfirst($controllerClassName);
    $controllerFile = ucfirst(strtolower($controllerClassName)) . '.php';

    if (file_exists(CONTROLLER . $controllerFile)) {
      include_once CONTROLLER . $controllerFile;
    } else {
      route::errorHome();
    }

    $method = $actionName;

    $controller = new $controllerName();
    if (method_exists($controller, $method)) {
      $controller->$method($payload);
    } else {
      route::errorHome();
    }
  }

  public static function errorHome()
  {
    header('HTTP 404 Not found');
    header('Status: 404 Not Found');
    header('location:/error');
  }
}
