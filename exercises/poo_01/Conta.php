<?php

namespace exercises\poo_01;

//É abstrata, porque o objeto instanciado sempre será ContaCorrente ou ContaPoupança
use http\Exception;

abstract class Conta
{
    //protected = pode ser acessada pela classe e por quem estende ela
    protected string $numeroConta;
    protected float $saldo;

    //Deve ter um construtor porque "a propriedade não pode ser acessada antes de ser inicializada" (ou deve ser nullable)
    public function __construct(string $numeroConta, int $saldo)
    {
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    //uma função abstract obriga quem estende a implementar ela
    abstract public function verSaldo(): float;

    private function verNegativo(float $valor): void
    {
        if ($valor < 0) throw Exception("Conta já existe");
    }

    abstract public function executarSaque($valor): void;

    final public function sacar(float $valor): bool
    {
        $this->verNegativo($valor);
        $this->executarSaque($valor);
        return true;
    }

    public function depositar(float $valor): bool
    {
        $this->verNegativo($valor);
        $this->saldo = $this->saldo + $valor;
        return true;
    }

    /**
     * @return string
     */
    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }
}