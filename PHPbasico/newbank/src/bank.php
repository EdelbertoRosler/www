<?php
include_once "Account.php";

$account1 = new Account();
$account2 = new Account();

$account1->cpf = "001.001.001-11";
$account1->titular = "Gabriel Rocha";
$account1->saldo = 1000;

$account2->cpf = "002.002.002-22";
$account2->titular = "Tiago Costa";
$account2->saldo = 7000;

// -------------------------------

$account1->whithdraw(100);
$account1->deposit(300);
$account1->transfer(100, $account2);

$account2->whithdraw(500);
$account2->deposit(100);
$account2->transfer(600, $account1);


var_dump($account1);
echo "<br>";
var_dump($account2);




// var_dump($account1);