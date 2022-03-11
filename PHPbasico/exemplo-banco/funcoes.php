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