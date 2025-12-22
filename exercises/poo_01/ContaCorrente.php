<?php

namespace exercises\poo_01;

class ContaCorrente extends Conta
{
    public float $totalTaxa;

    private function addTaxa(float $valor): void
    {
        $taxa = 5;

        $this->saldo = $this->saldo - $valor - $taxa;
        $this->totalTaxa = $this->totalTaxa + $taxa;
    }

    public function executarSaque($valor): void
    {
        $valor > $this->saldo ? $this->addTaxa($valor) : $this->saldo = $this->saldo - $valor;
    }

    public function verTaxas(): float
    {
        return $this->totalTaxa;
    }

    public function verSaldo(): float
    {
        return $this->saldo;
    }

    public function exibirDados(): void {
        echo "Conta Corrente: {$this->numeroConta} - Saldo: R$ {$this->saldo}\n";
    }
}