<?php

 class OurClass
{
    final function doSomething()
    {
        echo "Do Something";
    }
}

class MyClass extends OurClass
{
    // function doSomething()
    // {
    //     echo "Doing Nothing";
    // }
}

$mc = new MyClass();
$mc->doSomething();

?>