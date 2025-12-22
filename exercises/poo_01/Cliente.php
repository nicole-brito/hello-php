<?php

namespace exercises\poo_01;

class Cliente
{
    private string $nome;
    private string $cpf;
    private ?array $contas;

    public function addConta(Conta $conta)
    {

    }

    public function removerConta()
    {

    }

    public function exibirContas(): array
    {
        return $this->contas;
    }

}