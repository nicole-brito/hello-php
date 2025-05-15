<?php

//yes i got your letter yes i´m doing better i dont need your closure

//closure é uma função anônima que serve para criar funções que não precisam de nome (?)

$person = function ($name) {
    return $name;
};

var_dump($person("Nic")); //string(3) "Nic"

/*
* object(Closure)#1 (3) {
* ["name"]=>
* string(87) "{closure:C:\Users\nicol\PhpstormProjects\hello-php\cfs_01_intro\01_intro\closure.php:5}"
* ["file"]=>
* string(75) "C:\Users\nicol\PhpstormProjects\hello-php\cfs_01_intro\01_intro\closure.php"
* ["line"]=>
*  int(5)
}
*/