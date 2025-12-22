<?php

namespace exercises\poo_01;

use http\Exception;

class ContaPoupanca extends Conta
{

    public function verSaldo(): float
    {
        return $this->saldo;
    }

    public function executarSaque($valor): void
    {
        $valor > $this->saldo ? throw Exception("Valor negativo") : $this->saldo = $this->saldo - $valor;
    }

    public function exibirDados(): void {
        echo "Conta Poupança: {$this->numeroConta} - Saldo: R$ {$this->saldo}\n";
    }
}