<?php


$contexto = stream_context_create([
  'zip' => [
    'password'=> '123',
  ] 
  ]);

echo file_get_contents("zip://arquivos.zip", false, $contexto);

fopen('arquivo', 'modo', false, $contexto);