<?php

$i = 0;

while ($i < 5) {
  echo "i: {$i}\n";
  $i++;
};

do {
  echo "i: {$i}\n";
  $i++;
} while ($i < 5);

for ($i = 0; $i < 5; $i++) {
  echo "i: {$i}\n";
};

for ($i = 0;; $i++) {
  if ($i >= 5) {
    break;
  };

  echo "i: {$i}\n";
};

$array = [1, 2, 3, 4, 5];
$array2 = [1 => "a", 2 => "b", 3 => "c"];

foreach ($array as $val) {
  echo "{$val}\n";
};

foreach ($array as $key => $val) {
  echo "{$key} : {$val}\n";
};

foreach ($array2 as $key => $val) {
  echo "{$key} : {$val}\n";
};
