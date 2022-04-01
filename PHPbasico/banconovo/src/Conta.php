<?php

class Conta 
{
    public $cpf;
    public $titular;
    public $saldo;


    public function sacar(float $valor)
    {
        if ($valor > 0 && $valor < $this->saldo) {
            $this->saldo -= $valor;
        }
        else {
            echo "Impossível realizar o saque!";
        }
    }

}




