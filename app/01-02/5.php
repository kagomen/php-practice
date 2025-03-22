<?php

class MyClass
{
  public $publicProperty = "public property";
  protected $protectedProperty = "protected property";
  private $privateProperty = "private property";
  public static $publicStaticProperty = "public static property";

  public function displayProperties()
  {
    echo "$this->publicProperty\n";
    echo "$this->protectedProperty\n";
    echo "$this->privateProperty\n";
  }
}

$obj = new MyClass();
$obj->displayProperties();

echo MyClass::$publicStaticProperty . "\n";
MyClass::$publicStaticProperty = "changed static property";
echo MyClass::$publicStaticProperty . "\n";

class ChildClass extends MyClass
{
  public function displayParentClassProperties()
  {
    echo "$this->publicProperty\n";
    echo "$this->protectedProperty\n";
    echo MyClass::$publicStaticProperty . "\n";
  }
}

$childObj = new ChildClass();
$childObj->displayParentClassProperties();
