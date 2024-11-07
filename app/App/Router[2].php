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
      $pattern ='#^' . $route['path'] . '$#';
      if (preg_match($pattern, $path, $variables) && $method == $route['method']) {
        $controller = new $route['controller'];
        $function = $route['function'];
        // $controller->$function();
        // var_dump($variables[0]);// kalau ke hello maka isinya hello. 
        array_shift($variables);//makanya di shift yg pertama
        // karena arr pertama kanisinya pathnya aslinya. biar tidak error ini berarti
        call_user_func_array([$controller, $function], $variables);
        return;
      }
    }
    http_response_code(404);
    echo "CONTROLLER NOT FOUND";
  }
}