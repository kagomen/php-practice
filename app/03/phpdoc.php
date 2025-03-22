<?php

#[MyClass]
class Member
{
  private $name;

  #[MyMethod(key: 123)]
  #[MyMethod(100 * 20), MyMethod(array("key" => "value"))]
  public function greeting()
  {
    return sprintf("hello, %s\n, $this->name");
  }
}

$rc = new ReflectionClass(Member::class);
$attrs = $rc->getAttributes();

foreach ($attrs as $attr) {
  var_dump($attr->getName()); //string(7) "MyClass"
  var_dump($attr->getArguments()); //array(0) {} 引数を配列で返すメソッド
}

$attrs = $rc->getMethod("greeting")->getAttributes();
foreach ($attrs as $attr) {
  var_dump($attr->getName());
  var_dump($attr->getArguments());
}

// /var/www/html/03/01.php:26:
// string(8) "MyMethod"
// /var/www/html/03/01.php:27:
// array(1) {
//   'key' =>
//   int(123)
// }
// /var/www/html/03/01.php:26:
// string(8) "MyMethod"
// /var/www/html/03/01.php:27:
// array(1) {
//   [0] =>
//   int(2000)
// }
// /var/www/html/03/01.php:26:
// string(8) "MyMethod"
// /var/www/html/03/01.php:27:
// array(1) {
//   [0] =>
//   array(1) {
//     'key' =>
//     string(5) "value"
//   }
// }