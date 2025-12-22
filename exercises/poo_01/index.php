<?php

require __DIR__ . '/Conta.php';
require __DIR__ . '/ContaCorrente.php';
require __DIR__ . '/ContaPoupanca.php';
require __DIR__ . '/Cliente.php';

use exercises\poo_01\Conta;
use exercises\poo_01\ContaCorrente;
use exercises\poo_01\ContaPoupanca;
use exercises\poo_01\Cliente;

$teste = new Cliente(
    'Nic',
    '123',);
//$teste = new ContaPoupanca();


echo $teste->addConta(
    new ContaCorrente(
        123,
        12
    )
);

echo $teste->sacar(10);
echo $teste->verTaxas();
echo $teste->sacar(10);
echo $teste->verTaxas();
echo $teste->sacar(10);
echo $teste->verTaxas();
echo $teste->sacar(10);
echo $teste->verTaxas();


