<?php 

//Strings
var_dump("Hello World"); //Output: string(11) "Hello World"

//Integers
var_dump(123); //Output: int(123)

//Floats
var_dump(123.45); //Output: float(123.45)

//Booleans
var_dump(true); //Output: bool(true)
//PHP é uma mãe, deixa você fazer o que quiser:
var_dump(TrUe); //Output: bool(true)

//Null
var_dump(null); //Output: NULL

//Arrays = Index 0 
var_dump([1, 2, 3]); //Output: array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
//Associative Arrays
var_dump(["name" => "John", "age" => 30]); //Output: array(2) { ["name"]=> string(4) "John" ["age"]=> int(30) }

//Objects
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}
$person = new Person("John", 30);

var_dump($person); //Output: object(Person)#1 (2) { ["name"]=> string(4) "John" ["age"]=> int(30) }


?>