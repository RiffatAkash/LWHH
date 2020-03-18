<?php

class Animal{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eat()
    {
        echo "{$this->name} is eating";
    }
    public function run()
    {
        echo "{$this->name} is running";
    }
    public function sleep()
    {
        echo "{$this->name} is sleeping";
    }
    public function greet()
    {

    }
    protected function addTitle($title)
    {
        $this->name = $title . " " . $this->name;
    }
}

class Human extends Animal {

    public function sayHi()
    {
        echo "Hi";
        echo '</br>';
    }

    public function greet()
    {
        $this->addTitle('Mr.');
        echo "{$this->name} says hi";
    }

    // public function eat()
    // {
    //     echo "I am eating";
    // }
    // public function run()
    // {
    //     echo "I am running";
    // }
    // public function sleep()
    // {
    //     echo "I am sleeping";
    // }
}

class Cat extends Animal
{
    public function greet()
    {
        echo "{$this->name} says Meow";
    }
    // public function eat()
    // {
    //     echo "I am eating";
    // }
    // public function run()
    // {
    //     echo "I am running";
    // }
    // public function sleep()
    // {
    //     echo "I am sleeping";
    // }
}

$rasel = new Human('Akash');
echo '</br>';
echo $rasel->eat();
echo '</br>';
echo $rasel->greet();
echo '</br>';
$cat1= new Cat('Tom');
echo '</br>';
$cat1->greet();
echo '</br>';
$cat1->sleep();

?>