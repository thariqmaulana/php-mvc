<?php

// materi route

require_once __DIR__ . '/../vendor/autoload.php';

use Thariq\PhpMvc\App\Router;
use Thariq\PhpMvc\Controller\HomeController;
use Thariq\PhpMvc\Controller\ProductController;
use Thariq\PhpMvc\Middleware\AuthMiddleware;

Router::add('GET', '/', HomeController::class, 'index');//Thariq\PhpMvc\Controller\HomeController. full
Router::add('GET', '/hello', HomeController::class, 'hello', [AuthMiddleware::class]);
Router::add('GET', '/world', HomeController::class, 'world', [AuthMiddleware::class]);
// Router::add('GET', '/login', HomeController::class, 'login',);

Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class,
  'categories');

Router::run();

/**Controller
 * Digunakan sebagai class yg menerima request pertama kali
 */