<?php


$email = ' vinicius@alura.com.br ';

echo trim($email) . PHP_EOL;


$csv =  ',Vinicius Dias,24,' ;

echo trim($csv, '.,') . PHP_EOL;
echo ltrim($csv, '.,') . PHP_EOL;
echo rtrim($csv, '.,') . PHP_EOL;
