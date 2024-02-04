<?php

namespace Alura\Solid\Service;
use Alura\Solid\Client\ClientInterface;
use Alura\Solid\Model\Pontuavel;

class Assistidor
{

    public function assistir(Pontuavel $conteudo){
        $conteudo->assistir();
    }

}
