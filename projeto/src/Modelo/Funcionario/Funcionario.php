<?php
namespace Alura\Banco\Modelo\Funcionario;

abstract class Funcionario extends Pessoa
{
   
   
    private float $salario; 
    
    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }
    
    
    public function alterNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }
    
    abstract public function calculaBonificacao(): float;
    
      
}


