<?php 

$name = 'Nic';
$age = 23;
$employed = true;

if ($name == 'Nic') {
    echo "Essa é a sintaxe do if";
} else if ($name == 'Pipipi') {
    echo "Bem normal :)";
} else {
    echo "Tem esse também";
}

if ($age >= 18 && $employed ) {
    echo "Adulto funcional";
} else if ($age >= 18 || $employed) {
    echo "Menor aprendiz ou adulto funcional";
} else {
    echo "kid"; 
}

?>