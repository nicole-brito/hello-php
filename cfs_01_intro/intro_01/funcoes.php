<?php

function dbConnection()
{
    $pdo = new PDO('mysql:host=localhost;dbname=phpstorm', 'root', '');
    return $pdo;
}

function getData($table)
{
    $dbConnection = dbConnection();
    $query = $dbConnection->query("select * from {$table}");
    $query->execute();
    return $query->fetchAll();
}

getData('users');
getData('payment-db');
