<?php

namespace exercises\poo_01;

abstract class ContaPoupanca implements ContaPort
{
    public function sacar($saldo): void
    {
        echo "Digite o valor de saque da conta poupança:\n";
        $valor = readline();

        if ($valor > $saldo) {
            echo "Não foi possível realizar o saque\n";
        } else {
            echo "Seu novo saldo é de ";
            $saldo = $saldo - $valor;
            echo $saldo . "\n";
        }
    }
}