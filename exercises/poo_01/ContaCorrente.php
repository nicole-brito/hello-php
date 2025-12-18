<?php

namespace exercises\poo_01;

class ContaCorrente extends Conta
{
    public int $tarifa = 0;

    public function sacar($valor): void
    {
        if ($valor > $this->getSaldo()) {
            echo "Uma taxa será cobrada\n";
            echo "Seu novo saldo é de ";
            $this->saldo = $this->getSaldo() - $valor - 5;
            $this->tarifa++;
        } else {
            echo "Seu novo saldo é de ";
//Por que ele funciona dos dois jeitos? (porque int $saldo em Conta é public(?))
//Protected
            $this->saldo = $this->saldo - $valor;
        }
        echo $this->getSaldo() . "\n";
    }

    public function verTaxas(): void
    {
        echo "Vezes que a tarifa foi cobrada: " . $this->tarifa . "\n";
        echo "Valor: " . $this->tarifa * 5 . "\n";
    }


}