<?php 
namespace Alura\Banco\Modelo;

class ContaPoupanca extends Conta
{
    public function percentualTarifa(): float 
    {
       return 0.03 ;
    }
}
