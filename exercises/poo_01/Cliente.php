<?php

namespace exercises\poo_01;

use http\Exception;

class Cliente
{
    private string $nome;
    private string $cpf;
    private ?array $contas;

    public function __construct(string $nome, string $cpf, array $contas)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->contas[] = $contas;
    }

    public function addConta(Conta $conta)
    {
//        if (in_array($this->conta->getNumeroConta())) {
//            throw Exception::error_log("Conta já existe", 0,null, null);
//        }
        $this->contas[] = $conta;
//        echo "Contas: " . implode($this->contas);
        echo var_dump($this->contas);
    }

    public function removerConta()
    {

    }

    public function exibirContas(): array
    {
        return $this->contas;
    }

}