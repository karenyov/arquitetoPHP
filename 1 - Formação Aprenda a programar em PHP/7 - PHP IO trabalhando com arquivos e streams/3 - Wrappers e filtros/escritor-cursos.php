<?php

// $arquivo = fopen('cursos-php.txt', 'a');

// $curso = "\n" . 'Design Patterns';

// fwrite($arquivo, $curso);


// fclose($arquivo);

$curso = "\nDesign Patterns";

file_put_contents('cursos-php.txt', $curso, FILE_APPEND);