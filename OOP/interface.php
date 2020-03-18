<?php

interface BaseAnimal
{
    function isAlive();
    function canEat($parmal,$parmal2);
    function breed();
}

class Animal implements BaseAnimal
{
    function isAlive(){}
    function canEat($parmal,$parmal2){}
    function breed(){}
}

interface BaseHuman extends BaseAnimal
{
    function canTalk();
}



$cat = new Animal();
echo $cat instanceof Human;
// $h = new Human();
// echo $h instanceof BaseHuman;

abstract Class AbstractHuman implements BaseHuman
{
    abstract public function run();
    function eat()
    {
        echo "I am eating";
    }
}
class Human extends AbstractHuman
{
    function isAlive(){}
    function canEat($parmal,$parmal2){}
    function breed(){}
    function canTalk(){}
    function run(){}
}
$h = new Human();

?>