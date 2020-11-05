<?php



require_once 'autoload.php';

use Alura\Banco\Modelo\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('Petropólis','um bairro','minha rua','71B');
$vinicius = new Titular(new Cpf( '123.456.789-10'),'Vinicius Dias',$endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new Cpf('698.549.548-10'), 'Patricia',$endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('A',  'B',  'C',  '1D');
$outra = new Conta(new Titular(new Cpf('123.654.789-01')),'abc',$outroEndereco);
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();


