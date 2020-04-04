<?php

//singlepattern

class SomeClass
{
    static $instancs;
    private $name;

    function __construct($name)
    {
        $this->name = $name;
        echo "New Instance Created";
    }
}

?>