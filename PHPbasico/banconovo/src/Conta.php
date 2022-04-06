<?php

class Conta 
{
    public $cpf;
    public $titular;
    public $saldo;


    public function sacar(float $valor): void
    {
        if ($valor <= 0 || $valor > $this->saldo) {
            echo "Impossível realizar o saque!";
            return;
        }
        $this->saldo -= $valor;
    }

    public function depositar(float $valor): void 
    {
        if ($valor <= 0) {
            echo "Impossível realizar o depósito";
            return;   
        }
        $this->saldo += $valor;
    }

    public function transferir(float $valor, Conta $conta): void
    {
        if ($valor <= 0 || $valor > $this->saldo) {    
            echo "Impossível realizar a transferência";
            return;
        }
        $this->sacar($valor);
        $conta->depositar($valor);
    }
}




