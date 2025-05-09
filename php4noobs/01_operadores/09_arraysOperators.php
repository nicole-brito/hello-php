<?php 

//Operador de União

$user = [
    'name' => 'Nicole',
    'age' => 23
];

$workplace = [
    'company' => 'Pags',
    'role' => 'Software engineer'
];

$all = $user + $workplace;

print_r($all);

/**
 * Array
 * (
 * [name] => Nicole
 * [age] => 23
 * [company] => Pags
 * [role] => Software engineer
 * )
 */

 //Igualdade
 $userTwo = [
    'name' => 'Não é a Nicole',
    'age' => 23
];

var_dump($user == $userTwo); //false
var_dump($user != $userTwo); //true
 
//Identico

$userThree = [
    'name' => 'Nicole',
    'age' => '23'
];

var_dump($user === $userThree); //false
var_dump($user !== $userThree); //true

?>