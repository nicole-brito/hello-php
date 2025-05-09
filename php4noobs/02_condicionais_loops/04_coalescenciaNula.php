<?php 

// valorPredefinido ?? retorno caso não exista esse valor

$user = [
    // 'name' => 'nic',
    'age' => 23,
    'coisa' => 'coisinha'
];

echo $user['name'] ?? 'nicole' . PHP_EOL; //nicole
echo $user['name'] ?? $user['coisa'] ?? 'nicole' . PHP_EOL; //coisinha

echo isset($user['name']) ? $user['name'] : 'nicole B' . PHP_EOL; //nicole B

?>