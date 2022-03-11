<?php

function mensagem(string $mensagem){
    echo "$mensagem <br>";
}

//depois dos parâmetros, é passado o tipo do retorno esperado
function saque(array $conta, float $saque) : array {
    if($saque > $conta['saldo']){
        mensagem("Saldo insuficiente para saque");
    } else{
        $conta['saldo'] -= $saque; 
    }
    return $conta;
}

function deposito(array $conta, float $deposito) : array {
    if($deposito > 0 ){
        $conta['saldo'] += $deposito;
    } else{
        mensagem("O depósito deve ser maior que zero");
    }
    return $conta;
};
//----------------passagem por referência  -  passagem por valor-------------------------------------
#passagem por referência - a alteração altera a referência, o "original"
#passagem por valor - a altereação gera uma cópia, para fazer a alteração apenas no valor da variável


#função para passar o nome do titular para letras maiúsculas. 
#o "&" serve para alterar no endereço de memória (sem o "&", ele faz uma cópia e não altera o original)
function letrasMaiusculas(array &$conta) {
    $conta['titular'] = mb_strtoupper($conta['titular']);
}
