<?php


namespace POO_04\construct_118;
class User
{
    /*
     * __construct é um méodo mágico chamado automaticamente sempre que um novo objeto é instanciado
     * É executado primeiro que todos e serve para inicializar um objeto com os valores iniciais das propriedades ou executa as configurações necessárias
     *
     */

    //PHP > 8.0
    //Constructor Property Promotion permite definir a visibilidade, tipo e propriedade direto no constructor
    public function __construct(
        public string $name,
        public string $email,
    )
    {
    }

//PHP < 8.0:
//    public string $name;
//    public string $email;

//    public function __construct(
//        string $name,
//        string $email
//    ): void
//    {
//        $this->name;
//        $this->email;
//
//        echo "Forma de criar o usuário antes do PHP 8.0. {$this->name}";
//    }


}