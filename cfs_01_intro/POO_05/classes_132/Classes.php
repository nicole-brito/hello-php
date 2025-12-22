<?php

namespace cfs_01_intro\POO_05\classes_132;

require __DIR__ . '/Login.php';
use cfs_01_intro\POO_05\classes_132\Login;


/*
 * Classe: Definição do Objeto e seu comportamento
 * Propriedades = Atributos = Caracteristicas = Variáveis
 * Métodos = Comportamentos = Ações
 */

$login = new Login;
$login->email = "nic@email.com";
var_dump($login);
//object(cfs_01_intro\POO_05\classes_132\Login)#1 (2) {
//  ["email"]=>
//   "nic@email.com"
//  ["password"]=>
//  NULL
//}

$user = ['name' => 'Nic', 'email' => 'nic@email.com'];
//Transforma um array em um objeto do tipo stdClass (uma classe que só tem propriedades, sem métodos):
$userObj = (object)$user;
var_dump($userObj);
//object(stdClass)#2 (2) {
//  ["name"]=>
//  string(3) "Nic"
//  ["email"]=>
//  string(13) "nic@email.com"
//}