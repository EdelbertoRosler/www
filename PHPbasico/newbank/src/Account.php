<?php

class Account                                                   // Evitar escrever atributos públicos
{
    private $cpf;
    private $holder;
    private $balance;
    private static $countAccounts = 0;                          // É um membro da classe e não de um objeto que será criado na classe. Evitar esse tipo de abordagem se não for realmente necessário

    // Constutor - con
    public function __construct(string $cpf, string $holder) {
        $this->cpf = $cpf;
        $this->validateHolder($holder);
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

    private function validateHolder(string $holder)             // validação para o nome
    {
        if (strlen($holder) < 5) {
            echo "O nome deve conter ao menos 5 caracteres!";   // strlen = número de caracteres
            exit;
        }
        $this->holder = $holder;
    }

    // Getters
    public function getName(): string
    {
        return $this->holder;
    }

    public function getcpf(): string
    {
        return $this->cpf;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public static function getCountAccounts(): int              // Para poder acessar fora da classe, cria um getter estático
    {
        return self::$countAccounts;
    }


}




