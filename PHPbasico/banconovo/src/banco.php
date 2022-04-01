<?php
include_once "Conta.php";

$conta1 = new Conta();

$conta1->cpf = "001.001.001-11";
$conta1->titular = "Gabriel Rocha";
$conta1->saldo = 1000;

$conta1->sacar(100);
var_dump($conta1);

