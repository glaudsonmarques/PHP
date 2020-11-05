<?php
namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    public function percentualTarifa():float 
    {
       0.05 ;
    }
    
    public function transfere (float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo){
            echo "Saldo indisponível";
            return ;
        }
        
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
}

