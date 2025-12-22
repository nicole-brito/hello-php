<?php
declare(strict_types=1);

//Operador de Resolução de Escopo (::) = É usado para acessar membros estáticos, constantes e sobrescrever métodos da classe pai.

class MyClass {
    const CONST_VALUE = 'Um valor constante';
}

$classname = 'MyClass';
// Acessando a constante da classe
echo $classname::CONST_VALUE;

echo MyClass::CONST_VALUE;

//self = Usado para acessar membros estáticos e constantes da própria classe.
class AnotherClass {
    const ANOTHER_CONST = 'Outro valor constante';

    public static function showConst() {
        //Acessa a constante dentro da classe
        return self::ANOTHER_CONST;
    }
}

echo AnotherClass::showConst();

//parent = Usado para acessar membros da classe pai em uma classe filha.
class ParentClass {
    public static function parentMethod() {
        return "Método da classe pai\n";
    }
}
