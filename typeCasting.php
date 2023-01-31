<?php
/*
php is loosely type language and it do not have any type check caping when assin a value to a varible
int or integer
flaot or real
bool or boolean
string
array
object
 */
error_reporting(0);
$a = "something";
$b = (int) $a;
$players = ["ronaldo", "messi", "nadal", "sachin"];
echo (int) $players;
echo (array) $b;

class Person
{
    public $name = "souvik";
    public $address = "kalyani";

    public function get_info()
    {
        return "The name of the Person is $this->name and he lives in $this->address";
    }
}

// $firstPerson = new Person();
// $data = $firstPerson->get_info();
// echo $data;
// print_r($firstPerson);
