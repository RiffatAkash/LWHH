<?php 

class ParentClass
{
    protected $name;
    function __construct($name)
    {
        $this->name = $name;
        $this->sayHi();
    }
    function sayHi()
    {
        echo "HI from {$this->name}<br>";
    }
    function sayHi2()
    {
        echo "Bye from {$this->name}<br>";
    }
}
class ChildClass extends ParentClass
{
    function sayHi()
    {
        parent::sayHi2();
        echo "Hello";
    }
}

$cc = new ChildClass("AKASH");

?>