<?php 
class Human{
    public $name;
    public $age;
    function __construct($personName,$personage=0)
    {
       // echo "New Human Object is Created.</br>";
        $this->name = $personName;
        $this->age = $personage;
    }
    function sayHi(){
        echo "Akash.</br>";
        $this->sayName();
    }

    function sayName()
    {
        if($this->age)
        {
            echo "My Name is {$this->name} and age is {$this->age}.</br>";
        }
        else
        {
            echo "My Name is {$this->name} and i don't know my age";
        }
        
    }
}

$h1 = new Human("Rubel",45);
$h1->sayHi();

$h2 = new Human("Riffat");
$h2->sayHi();

?>