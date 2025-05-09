<?php 

/**
 * ==
 * !=
 * === -> Identico
 * !==
 * > MAIOR
 * < MENOR
 * >= 
 */

var_dump(value: 1 == 1);
var_dump(value: 1 == '1'); //true
$password = 'secret';
var_dump(value: $password == 'secret' );
var_dump(value: $password == 'secret123' );

var_dump(1 != 2);

var_dump(value: 1 === '1'); //false
var_dump(value: 1 !== '1'); 

// MAIOR >

$number = 6;
var_dump($number > 7);
var_dump($number > 5);
var_dump($number >= 5);
var_dump($number <= 5);


?>