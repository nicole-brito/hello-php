<?php

require __DIR__ . '/Conta.php';
require __DIR__ . '/ContaCorrente.php';
require __DIR__ . '/ContaPoupanca.php';

//require __DIR__ . '/ContaPort.php';

use exercises\poo_01\Conta;
use exercises\poo_01\ContaCorrente;
use exercises\poo_01\ContaPoupanca;

//$teste = new Conta('0',1);
//
//echo $teste->verSaldo('123', 21);

$teste = new ContaCorrente();
//$teste = new ContaPoupanca();

echo $teste->verSaldo('123', 21);
//echo $teste->verTipo($teste, "Corrente");

echo $teste->sacar('10');
//echo $teste->verTaxas();
//
//echo "Menu";
//switch (readline()) {
//    case 1:
//        $teste->sacar();
//        break;
//    case 2:
//        $teste->verTaxas();
//        break;
//}