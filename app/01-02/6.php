<?php

interface AnimalInterface
{
  function sound();
}

class Dog implements AnimalInterface
{
  function sound()
  {
    echo "bow\n";
  }
}

class Cat implements AnimalInterface
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
