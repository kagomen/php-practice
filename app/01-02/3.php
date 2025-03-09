<?php

function sum(...$numbers)
{
  return array_sum($numbers);
}

echo sum(1, 2);
echo sum(1, 2, 3, 4);
echo sum(1, 2, 3, 4, 5);

function createUser(
  string $name,
  string $email,
  ?int $age = null,
  string $country = 'Japan'
) {
  echo "$name $email $age $country";
}

// 名前付き引数
createUser(
  email: "sample@sample.com",
  name: "kagome",
);

$greet = function () {
  echo "hello\n";
};

$greet();

$myName = "kagome";

$greetMe = function () use ($myName) {  // useで親スコープから変数を引き継ぐ
  echo "hello $myName\n";
};

$greetMe();

class myClass
{
  public $name = "kagome";
  public function createClosure()
  {
    $closure = function () {
      echo "closure: $this->name\n";
    };
    return $closure;  // 再利用のため
  }
}

$obj = new myClass();
$closure = $obj->createClosure();
$closure();
