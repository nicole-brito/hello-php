<?php

namespace exercises\poo_01;

interface ContaPort
{
    public function sacar($saldo);

    public function verSaldo($numeroConta, $saldo);

    public function depositar($saldo): void;

}