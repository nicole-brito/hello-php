<?php

namespace exercises\poo_01;

require __DIR__ . '/ContaPort.php';

class Conta implements ContaPort
{
    private string $numeroConta;
    private int $saldo;

    public function verSaldo($numeroConta, $saldo): void
    {
        echo "Saldo: {$saldo}\n";

    }

    public function sacar($saldo): void
    {
    }

    public function depositar($saldo): void
    {
        echo "Digite o valor de depósito:\n";
        $valorDeposito = readline();

        if ($valorDeposito < 0) {
            echo "Não foi possível realizar o depósito\n";
        } else {
            echo "Seu novo saldo é de ";
            $saldo = $saldo + $valorDeposito;
            echo $saldo . "\n";
        }
    }
}