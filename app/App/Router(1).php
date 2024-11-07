<?php

namespace Thariq\PhpMvc\App;

class Router
{
  private static array $routes = [];

  // menambahkan url mapping
  /**
   * method = http method. url x hanya boleh menerima method get misalnya
   * path = path_info nya
   * controller = nama controllernya yg dieksekusi untuk url tersebut
   * function = nama function di controller untuk url tersebut
   */
  public static function add(string $method, string $path, string $controller, string $function): void
  {
    self::$routes[] = [
      'method' => $method,
      'path' => $path,
      'controller' => $controller,
      'function' => $function,
    ];
  }

  // menjalankan router
  public static function run(): void
  {
    // default path ketika kosong
    $path = "/";
    if (isset($_SERVER['PATH_INFO'])) $path = $_SERVER['PATH_INFO'];

    $method = $_SERVER['REQUEST_METHOD'];

    foreach (self::$routes as $route) {
      if ($path == $route['path'] && $method == $route['method']) {
        echo "CONTROLLER : " . $route['controller'] . " - " . "FUNCTION : " . $route['function'];
        return;
      }
    }
    http_response_code(404);
    echo "CONTROLLER NOT FOUND";
  }
}