<?php
trait MyTrait
{
    static $number;
    abstract function sayHi();
}

class MyClassA{
    use MyTrait;

    function sayHi()
    {
        echo '<br>'."HI";
    }
}

class MyClassB{
    use MyTrait;

    function sayHi()
    {
        echo '<br>';
        echo "HI";
    }
}

echo MyClassA::$number = 2;
echo '<br>';
echo MyClassB::$number = 8;

$na = new MyClassA();
echo '<br>'.$na::$number;
$na->sayHi();



$nb = new MyClassB();
echo '<br>'.$nb::$number;
$na->sayHi();

?>