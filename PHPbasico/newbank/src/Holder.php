<?php

class Holder {
    private CPF $cpf;
    private string $name;

    public function __construct(CPF $cpf, string $name) {
        $this->cpf = $cpf;
        $this->validateName($name);
        $this->name = $name;
    }


    private function validateName(string $name)             // validação para o nome
    {
        if (strlen($name) < 5) {
            echo "O nome deve conter ao menos 5 caracteres!";   // strlen = número de caracteres
            exit;
        }
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCpfH(): string
    {
        return $this->cpf->getCpf();
    }

}