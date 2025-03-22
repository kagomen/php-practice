<?php

abstract class Animal
{
  abstract function sound();

  function sleep()
  {
    echo "zzz...\n";
  }
}

class Dog extends Animal
{
  function sound()
  {
    echo "bow\n";
  }
}

class Cat extends Animal
{
  function sound()
  {
    echo "meow\n";
  }
}

$dog = new Dog();
$cat = new Cat();

$dog->sound();
$cat->sound();
$dog->sleep();
$cat->sleep();
