<?php

namespace POO_05\parent_142;

require __DIR__ . '/Pai.php';

class Filho extends Pai
{
    public function metodo(): string
    {
        //Assim não funciona, pois os dois métodos são iguais
//      return $this->metodo();
        return parent::metodo() . " e Filho";
    }
}