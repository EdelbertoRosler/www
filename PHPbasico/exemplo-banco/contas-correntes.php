<?php


#tres formas de buscar outros arquivos:
//include 'funcoes.php';//se os aquivos não são muito importantes
//require 'funcoes.php';//mais seguro para arquivos importantes pois gera error caso não encontre o arquivo
require_once 'funcoes.php';// melhor, pois ele não importa outras vezes o arquivo solicitado

$contas = [
    '111.001.001-11' => [
        'titular' => 'Beto',
        'saldo' => 2800
    ],
    '222.002.002-22' => [
        'titular' => 'Lise',
        'saldo' => 3700
    ],
    '333.003.003-33' => [
        'titular' => 'Gabriel',
        'saldo' => 1855
    ]
];

$contas['111.001.001-11'] = saque($contas['111.001.001-11'], 500);//total 2300
$contas['111.001.001-11'] = deposito($contas['111.001.001-11'], 1000);//total 3300

foreach($contas as $cpf => $dados){
    mensagem($cpf . "  " . $dados['titular'] ." = " .  $dados['saldo']);
};//dentro de contas, a chave será cpf, e cada um tera seus dados

echo "<br>";

//outra sintaxe:
foreach ($contas as $cpf => $dados) {
    mensagem(
        "$cpf {$dados['titular']} {$dados['saldo']}"
    );
}