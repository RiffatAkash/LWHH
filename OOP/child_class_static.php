<?php

class A
{
    protected static $name;
    static function sayHi()
    {
        self::$name="Hello<br>";
        echo "Hi From A</br>";
    }
}

class B extends A
{
    static function sayHi()
    {
        parent::sayHi();
        echo parent::$name;
        echo "Hi From B</br>";
        //parent::sayHi();
    }
}

B::sayHi();

?>