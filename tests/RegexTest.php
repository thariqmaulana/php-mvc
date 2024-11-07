<?php

namespace Thariq\PhpMvc;

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertTrue;

class RegexTest extends TestCase {
  public function testRegex()
  {
    $path = "/products/12345/categories/food";

    $pattern ='#^/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)$#';

    //variable adalah url yg di regexkan
    $result = preg_match($pattern, $path, $variables);

    self::assertEquals(1, $result);//true

    var_dump($variables);

    array_shift($variables);

    var_dump($variables);

    /**data yg pertama(path asli) hapus saja
     * array(3) {
 * [0]=>
 * string(31) "/products/12345/categories/food"
 *[1]=>
  *string(5) "12345"
  *[2]=>
  *string(4) "food"
*}
     */
  }
}