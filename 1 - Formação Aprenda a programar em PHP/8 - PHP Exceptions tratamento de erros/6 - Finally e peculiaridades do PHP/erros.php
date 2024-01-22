<?php

error_reporting(E_ALL);
ini_set('display_errors', 0);

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    var_dump($errno, $errstr, $errfile, $errline);

    return true;
});

echo $variavel;
echo @$array[12];

echo CONSTANTE;