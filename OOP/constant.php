<?php
define('OK',123);

class MyClass
{
    const CITY = "DHAKA";

    function sayHi()
    {
        echo "Hi From".$this::CITY;
    }

}

$m = new MyClass();
$m->sayHi();
//echo $m::CITY;
echo MyClass::CITY;


?>