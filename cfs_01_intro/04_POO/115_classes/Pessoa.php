<?php

class Pessoa
{
    //Atributos:
    public $idade;
    public $nome;
    public $email;

    //Métodos:
    public function dados() {
        return "O nome é: {$this->nome}, idade: {$this->idade} e o email: {$this->email}";
    }
}
