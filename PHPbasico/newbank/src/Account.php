<?php

class Account                                                   // Evitar escrever atributos públicos
{
    private $holder;
    private $balance;
    private static $countAccounts = 0;                          // É um membro da classe e não de um objeto que será criado na classe. Evitar esse tipo de abordagem se não for realmente necessário

    // Constutor - con
    public function __construct(Holder $holder) {
        $this->holder = $holder;
        $this->balance = 0;

        self::$countAccounts ++;                                // O self e os dois pontos é a atribuição (self substitui "this", : substitui "->")
    }                                                           // poderia usar "Account::countAccounts ++" o resultado seria o mesmo

    // Destruct
    public function __destruct()                                // Para apagar da memória os objetos obsoletos 
    {
        self::$countAccounts --;
    }

    // Funções - fun
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

    public function transfer(float $value, Account $account): void
    {
        if ($value <= 0 || $value > $this->balance) {    
            echo "Impossível realizar a transferência";
            return;
        }
        $this->whithdraw($value);
        $account->deposit($value);
    }

    // Getters
    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getNameHolder(): string
    {
        return $this->holder->getName();
    }

    public function getCpfHolder(): string
    {
        return $this->holder->getCpfH();
    }


    public static function getCountAccounts(): int              // Para poder acessar fora da classe, cria um getter estático
    {
        return self::$countAccounts;
    }


}




