<?php
include_once "Conta.php";

$conta1 = new Conta();
$conta2 = new Conta();

$conta1->cpf = "001.001.001-11";
$conta1->titular = "Gabriel Rocha";
$conta1->saldo = 1000;

$conta2->cpf = "002.002.002-22";
$conta2->titular = "Tiago Costa";
$conta2->saldo = 7000;

// -------------------------------

$conta1->sacar(100);
$conta1->depositar(300);
$conta1->transferir(100, $conta2);

$conta2->sacar(500);
$conta2->depositar(100);
$conta2->transferir(600, $conta1);


var_dump($conta1);
echo "<br>";
var_dump($conta2);




// var_dump($conta1);