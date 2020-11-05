<?php

namespace Alura\Banco\Service;

use Alura\Banco\Service\Autenticavel;

class Autenticador {
    function tentaLogin( $autenticavel, string $senha): void
    {

        if($autenticavel->podeAutenticar($senha)){
            echo "Ok. Usuário logado no sistema";
        }else{
            echo "Ops. Senha incorreta. ";
        }
    }
}