<?php

require 'src/Conta.php';
require 'src/Titular.php';

$gustavo  = new Titular('Gustavo', '123.324.455-23');
$marcos  = new Titular('Marcos', '345.345.455-23');

$conta1 = new Conta($marcos);
$conta2 = new Conta($gustavo);

$conta1->depositar(1200);
$conta1->transferir(700, $conta2);


echo $conta1->recuperaSaldo(). PHP_EOL;

echo $conta2->recuperaSaldo(). PHP_EOL;

echo Conta::recuperaNumeroDeContas(). PHP_EOL;











