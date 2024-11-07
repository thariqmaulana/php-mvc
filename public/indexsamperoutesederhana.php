<?php

namespace Thariq\PhpMvc;

// if (isset($_SERVER['PATH_INFO'])) {
//   echo $_SERVER['PATH_INFO'];
// } else {
//   echo "Tidak Ada PATH_INFO";
// }

/**
 *  buat dulu route defaultnya jika kosong
 * di url tetap tidak kelihatan karena kita hardcode darisini*/
$path = '/index';
/**  kalau kita menulis register.php di url. maka dia tidak akan ke view
 * melainkan tetap di public jika memakai ekstensi file. tidak akan masuk ke path info
*/

if (isset($_SERVER['PATH_INFO'])) {
  $path = $_SERVER['PATH_INFO'];
}

// kita load filenya disini. entry point index public
// diaa tetap /index.php/login
/** kenapa tidak require once?
 * karena user bisa bolak balik buka halaman
 * kalau hanya di require sekali maka tidak bisa dibuka 2 kali ++
 * jadi harus require terus sesuai kebutuhan
*/

$message = $_SERVER['PATH_INFO'];
echo "<script>console.log('". addslashes($message) . "'); </script>";
require __DIR__ . '/../app/View' . $path . '.php';