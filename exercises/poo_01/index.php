<?php

require __DIR__ . '/Conta.php';
require __DIR__ . '/ContaCorrente.php';
require __DIR__ . '/ContaPoupanca.php';

use exercises\poo_01\Conta;
use exercises\poo_01\ContaCorrente;
use exercises\poo_01\ContaPoupanca;

$teste = new ContaCorrente(
    '123',
    25.0
);
//$teste = new ContaPoupanca();


echo $teste->sacar(10);
echo $teste->verTaxas();
echo $teste->sacar(10);
echo $teste->verTaxas();
echo $teste->sacar(10);
echo $teste->verTaxas();
echo $teste->sacar(10);
echo $teste->verTaxas();
