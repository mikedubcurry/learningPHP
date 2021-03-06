<?php

namespace App\Core;

use Exception;

class Router
{
  protected $routes = [
    'GET' => [],
    'POST' => []
  ];

  public function define($routes)
  {
    $this->routes = $routes;
  }

  public static function load($file)
  {
    $router = new static;
    require $file;

    return $router;
  }

  public function direct($uri, $method)
  {
    if (array_key_exists($uri, $this->routes[$method])) {

      // return $this->routes[$method][$uri];
      // die(var_dump(explode("@", $this->routes[$method][$uri])));
      return $this->callAction(
        ...explode('@', $this->routes[$method][$uri])
      );
    }

    throw new Exception('No route defined for this URI.');
  }

  public function get($uri, $controller)
  {
    $this->routes['GET'][$uri] = $controller;
  }

  public function post($uri, $controller)
  {
    $this->routes['POST'][$uri] = $controller;
  }

  protected function callAction($controller, $method)
  {
    $controller =  "App\\Controllers\\{$controller}";
    $controller = new $controller;
    
    if (!method_exists($controller, $method)) {
      throw new Exception("{$controller} does not respond to action: {$method}");
    }
    return $controller->$method();
  }
}
