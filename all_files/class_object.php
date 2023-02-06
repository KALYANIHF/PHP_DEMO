<?php
class Person
{
    public $name;
    public $age;
    public $address;

    public function set_Name($name)
    {
        $this->name = $name;
    }

    public function set_Age($age)
    {
        $this->age = $age;
    }

    public function set_Address($address)
    {
        $this->address = $address;
    }

    public function get_Details()
    {
        return "The name of the person is $this->name he is $this->age and lives in $this->address";
    }
}

$person1 = new Person();
$person1->set_Name("souvik");
$person1->set_Age(26);
$person1->set_Address("Kalyani Nadia Anandanagar");

echo ($person1->get_Details());
