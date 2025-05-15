<?php

//callbacks são funções que são passadas como argumento para outra função
//TODO: aprender o que é todo
//DONE: aprender como marcar done

function teste($name)
{
    return $name;
}

function callback($callback)
{
    return $callback();
}

function teste2($callback){
    if(is_callable($callback)){
        return $callback('Nic');
    } else {
        return "Não é callback";
    }
}

$user = 'Jão';
echo teste2($user . PHP_EOL);
echo teste('Nic'. PHP_EOL);

function testeCallUseFunc($name)
{
    return 'Olá meu nome é ' . $name . PHP_EOL;
}

echo call_user_func('testeCallUseFunc', 'Nic' );

class User {
    public function teste()
    {
        return 'teste';
    }
}

$user = new User();

echo call_user_func([$user, 'teste']) . PHP_EOL;
