<?php
include_once "Account.php";

$account1 = new Account("001.001.001-11", "Gabriel Rocha");
$account2 = new Account("002.002.002-22", "Tiago Costa");


// -------------------------------

$account1->deposit(1000);
$account1->whithdraw(100);
$account1->transfer(200, $account2);

$account2->deposit(8000);
$account2->whithdraw(500);
$account2->transfer(600, $account1);


var_dump("account 1 R$ " . $account1->getBalance());
echo "<br>";
var_dump("account 2 R$ " . $account2->getBalance());
echo "<br>";
var_dump($account1->getName());
echo "<br>";

echo Account::getCountAccounts();



