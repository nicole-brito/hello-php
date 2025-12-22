<?php

declare(strict_types=1);

namespace POO_05\tipagem_138;

class Tipagem
{
    public string $email;

    //email espera o tipo string
    public function auth(string $email)
    {

    }

    //Espera um objeto do tipo crud (type hint)
    public function chamaCrud(Crud $crud)
    {

    }
}