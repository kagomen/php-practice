<?php

$name = "kagome";
echo "my name is {$name}n\n";

class SomeClass
{
  public string $name;
}

$some = new SomeClass;
$some->name = "kagomen";

echo "my name is {$some->name}\n";

$fruit = [
  1 => "apple",
  2 => "banana",
  "3" => "orange",
];

var_export($fruit);

const NAME = "KAGOME";
echo NAME;

function add(int $a, int $b)
{
  return $a + $b;
}

define("RESULT", add(1, 2));

echo RESULT;

$grade = "1";

$message = match ($grade) {
  1 => "grade: 1",
  2 => "grade: 2",
  default => "grade: invalid"
};

echo "\n{$message}\n";
