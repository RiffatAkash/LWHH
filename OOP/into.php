<?php
class Human{

    public $name;
    function sayHi()
    {
        echo "Salam.</br>";
        $this->sayName();
    }
    function sayName()
    {
        echo "My name is {$this->name}.</br>";
    }
}
class Cat{
    function sayHi()
    {
        echo "Meow\n";
    }
}
class Dog{
    function sayHi()
    {
        echo "Woof\n";
    }
}
$h1 = new Human();
$h1->name = 'Akash';

$h2 = new Human();
$h2->name = 'Dip';

$c1 = new Cat();
$d1 = new Dog(); 

$h1->sayHi();
//$h1->sayName();
//echo $h1->name;
// $c1->sayHi();
// $d1->sayHi();

$h2->sayHi();
//$h2->sayName();
//echo $h2->name;

?>