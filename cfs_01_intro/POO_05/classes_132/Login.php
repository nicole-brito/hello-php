<?php

namespace cfs_01_intro\POO_05\classes_132;

class Login
{
    //Propriedade
    public $email;
    public $password;

    //Método
    public function login()
    {
        return $this->email . ' ' . $this->password;
    }

}