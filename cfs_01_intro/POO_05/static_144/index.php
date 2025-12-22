<?php

//Strict Types = Apenas um valor correspondente exatamente à declaração do tipo será aceito, caso contrário, um TypeError será lançado.
declare(strict_types=1);

class User {

    public static string $name;

    public static function userInfo()
    {
        return "Método estático\n";

    }
}

//Para chamar um mé?odo estático, não precisa instanciar ele
echo $user = User::userInfo();

User::$name = "Nic\n";

echo User::$name;