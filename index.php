<?php 

require "functions.php";

// require "router.php";

class Person 
{
    public $name;
    public $age;

    public function breathe() {
        echo $this->name . " is breathing";
    }
}

$person = new Person();

$person->name = "Jhon lora";
$person->age = 30;

dd($person->breathe());