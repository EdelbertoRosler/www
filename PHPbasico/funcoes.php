<?php

function mensagem(string $mensagem)
{
    echo "$mensagem <br>";
}

//depois dos parâmetros, é passado o tipo do retorno esperado
function saque(array $conta, float $saque) : array 
{
    if($saque > $conta['saldo']){
        mensagem("Saldo insuficiente para saque");
    } else{
        $conta['saldo'] -= $saque; 
    }
    return $conta;
}

function deposito(array $conta, float $deposito) : array 
{
    if($deposito > 0 ){
        $conta['saldo'] += $deposito;
    } else{
        mensagem("O depósito deve ser maior que zero");
    }
    return $conta;
};

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

