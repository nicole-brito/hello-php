<?php

namespace exercises\poo_01;

use http\Exception;

class Cliente
{
    private string $nome;
    private string $cpf;
    private ?array $contas;

    public function __construct(string $nome, string $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function addConta(Conta $conta): void
    {
        $this->contas[] = $conta;
    }

    public function removerConta()
    {

    }

    public function exibirContas(): array
    {
        echo "Cliente: {$this->nome}\n";
        foreach ($this->contas as $conta) {
            $conta->exibirDados();
        }
        return $this->contas;
    }

}