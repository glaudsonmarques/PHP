<?php
namespace Alura\Banco\Service;

class ControloadorDeBonificacoes
{
    private float $totalBonificacoes = 0;
    
    public function adicionaBonificacoesDe(Funcionario $funcionario): void
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }
    
    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}
