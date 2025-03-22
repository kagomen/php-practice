<?php

class SampleClass
{
  public string $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

  public function displayName(): void
  {
    echo "$this->name\n";
  }
}

$instance = new SampleClass("kagome");
$instance->displayName();

$instance->name = "new kagome";
$instance->displayName();

class SampleClass2
{
  public int $val = 10;
  private static string $name = "kagome";

  public function displayVal()
  {
    echo "value: $this->val\n";
    echo "name:" . self::$name . "\n";
  }
}

$instance2 = new SampleClass2();
$instance2->displayVal();

class Person
{
  public function __construct(string $name, int $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  private string $name;
  private int $age;

  public function introduce()
  {
    echo "I'm $this->name and $this->age years old.\n";
    echo AgeValidate::isAdult($this->age) ? "I'm of legal age.\n" : "I'm underage.\n";
  }
}

class AgeValidate
{
  public static function isAdult(int $age): bool
  {
    return $age >= 18;
  }
}

$uri = new Person("uri", 2);

$uri->introduce();

class Person2
{
  public function __construct(public string $name, public int $age) {}  //プロパティ昇格（プロモーション）

  public function introduce()
  {
    echo "I'm $this->name and $this->age years old.\n";
  }
}

$toni = new Person2("toni", 5);
$toni->introduce();
