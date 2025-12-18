<?php

namespace POO_04\construct_118;

// Chama uma classe que está no mesmo diretório
require __DIR__ . '/User.php';

class Index
{
    //Declara a propriedade $user pra instanciar User
    public User $user;

    public function sayHi()
    {
        //Instancia um novo usuário
        $this->user = new User(
            name: "Nicole",
            email: "ex@ex.com"
        );

        echo "Hi, {$this->user->name}";
    }
}

//Cria uma instância de Index
$index = new Index();
//Chama a função
$index->sayHi();