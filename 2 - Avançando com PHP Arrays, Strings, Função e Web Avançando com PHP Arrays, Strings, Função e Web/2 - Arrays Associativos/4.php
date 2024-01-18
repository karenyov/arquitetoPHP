<?php

$array = [ 
  1 => 'a',
  '1' => 'c',
  1.5 => 'd',
  true => 'd',
];

foreach ($array as $item) {
  echo $item. PHP_EOL;
}