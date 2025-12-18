<?php

namespace exercises\poo_01;

require __DIR__ . '/ContaPort.php';

//É abstrata, porque o objeto instanciado sempre será ContaCorrente ou ContaPoupança
abstract class Conta
{
    private string $numeroConta;
    protected int $saldo;

    //Deve ter um construtor porque "a propriedade não pode ser acessada antes de ser inicializada" (ou deve ser nullable)
    public function __construct(string $numeroConta, int $saldo)
    {
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }


    public function verSaldo(): void
    {
        echo "O saldo da conta {$this->getNumeroConta()} é: {$this->saldo}\n";
    }

    public function sacar($valor): void
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

    /**
     * @return int
     */
    public function getSaldo(): int
    {
        return $this->saldo;
    }

    /**
     * @return string
     */
    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }



}