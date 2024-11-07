<?php

namespace Thariq\PhpMvc\App;

class View {

  public static function render(string $view,  $model)
  {
    require __DIR__ . '/../View/' . $view . '.php';//wow clean
  }
}

/**Middleware
 * Dieksekusi sebelum controller
 * misal cek sudah login atau belum. kan ini dipake terus
 * kalau di controller terlalu banyak duplikasi
 * harusnya sekali saja di middleware
 * dibuat dahulu kontraknya dalam interface.
 * karena implementasinya bisa banyak
 */