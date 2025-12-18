<?php

namespace exercises\poo_01;

class ContaCorrente implements ContaPort
{
    public int $tarifa = 0;

    public function sacar($saldo): void
    {
        echo "Digite o valor de saque da conta corrente:\n";
        $valor = readline();

        if ($valor > $saldo) {
            echo "Uma taxa será cobrada\n";
            echo "Seu novo saldo é de ";
            $saldo = $saldo - $valor - 5;
            $this->tarifa++;
        } else {
            echo "Seu novo saldo é de ";
            $saldo = $saldo - $valor;
        }
        echo $saldo . "\n";
    }

    public function verTaxas(): void
    {
        echo $this->tarifa * 5;
    }

}