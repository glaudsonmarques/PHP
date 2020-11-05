<?php
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new \Alura\Banco\Modelo\Funcionario\Gerente('João da Silva',
    new \Alura\Banco\Modelo\Cpf('123.456.789-10'),
    10000
    );

$autenticador->tentaLogin($umDiretor,'4321');