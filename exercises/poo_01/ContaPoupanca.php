<?php

namespace exercises\poo_01;

class ContaPoupanca extends Conta
{

    public function verSaldo(): float
    {
        return $this->saldo;
    }

    public function executarSaque($valor): void
    {
        $valor > $this->saldo ? throw error : $this->saldo = $this->saldo - $valor;
    }
}