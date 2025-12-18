<?php

// string
echo ('Hello php!');

//numbers -> intergers, float/double
echo gettype(2342);
echo gettype(23.42);

//booleans
echo gettype(true);

//arrays
//echo gettype([232, 87, 'nic', true]);

//object
class Person
{
}
echo gettype(new Person);

//null
echo gettype(null);

//variável tbm pode começar com _
$_name = "Feio";

//constante
define('NAME', 'Nic');
define('NAME2', $_name);

echo NAME;
echo NAME2;

//Constantes pré definidas: (constante mágica)
function teste()
{
    echo __FUNCTION__; //mds que coisa feia
    echo __METHOD__;
}
teste();

//echo __DIRECTORY_SEPARATOR__; // <- /

define('AGE', 18);

if (defined('AGE')) {
    echo AGE;
}

