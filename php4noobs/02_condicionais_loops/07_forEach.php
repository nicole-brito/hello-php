<?php 

// $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$array = [
    [
        "name" => "John",
        "age" => 30,
        "city" => "New York"
    ], 
    [
        "name" => "nic",
        "age" => 23,
        "city" => "são paulo",
    ],
];

foreach ($array as $key => $value) {
    echo $key . " " . $value['name'] . PHP_EOL;
}

$array = new stdClass;

$array->name = "mo";
$array->age = 24;

foreach($array as $key => $value) {
    echo $key . " " . $value . PHP_EOL;
}

?>