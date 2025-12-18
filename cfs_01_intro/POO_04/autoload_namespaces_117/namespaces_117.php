<?php

//require '../vendor/autoload.php'; -> Em vez disso, vamos usar o autoload
//psr4 = é um padrão recomendado para carregamento automático de classes a partir de seus namespaces e caminhos de arquivo
// = \<namespace>\<subnamespace>\<classe>

require 'helpers/autoload.php';

$login = new Login;

//$login->email = 'email.com';
//$login->password = '123';

//echo $login->auth(); e

$user = ['name' => 'Nicole', 'email' => 'email.com'];

$userObj = (object)$user;

echo $userObj->email;