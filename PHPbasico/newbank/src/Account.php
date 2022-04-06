<?php

class Account 
{
    private $cpf;
    private $holder;
    private $balance;


    public function whithdraw(float $value): void
    {
        if ($value <= 0 || $value > $this->balance) {
            echo "Impossível realizar o saque!";
            return;
        }
        $this->balance -= $value;
    }

    public function deposit(float $value): void 
    {
        if ($value <= 0) {
            echo "Impossível realizar o depósito";
            return;   
        }
        $this->balance += $value;
    }

    public function transfer(float $value, Conta $conta): void
    {
        if ($value <= 0 || $value > $this->balance) {    
            echo "Impossível realizar a transferência";
            return;
        }
        $this->whithdraw($value);
        $conta->deposit($value);
    }


    public function getName(string $name): string
    {
        return $this->$name;
    }

    public function getcpf(string $cpf): string
    {
        return $this->$cpf;
    }
    
    public function getSaldo(): float
    {
        return $this->$balance;
    }


}




