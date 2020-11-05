<?php
namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa implements Autenticavel
{
    
    private ENDERECO $endereco;
 
    public function __construct(CPF $cpf, string $nome, string $endereco)
    {
        parent::__construct($nome, $cpf);
        $this ->endereco = $endereco;
    }
    
   
    
    
    
    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}