<?php

namespace Thariq\PhpMvc\App;

class Router
{
  private static array $routes = [];

  public static function add(string $method, string $path, string $controller, string $function): void
  {
    self::$routes[] = [
      'method' => $method,
      'path' => $path,
      'controller' => $controller,
      'function' => $function,
    ];
  }


  public static function run(): void
  {

    $path = "/";
    if (isset($_SERVER['PATH_INFO'])) $path = $_SERVER['PATH_INFO'];

    $method = $_SERVER['REQUEST_METHOD'];

    foreach (self::$routes as $route) {
      if ($path == $route['path'] && $method == $route['method']) {
        /*KARENA SUDAH disimpan di variabel maka bisa
         misal:
        $className = Thariq\PhpMvc\Controller\HomeController
        $controller = new className; bisa
        new Thariq\PhpMvc\Controller\HomeController tidak bisa
        */
        $controller = new $route['controller'];
        echo "<script>console.log('". addslashes($route['controller']) . "'); </script>";
        $function = $route['function'];
        $controller->$function();
        return;
      }
    }
    http_response_code(404);
    echo "CONTROLLER NOT FOUND";
  }
}