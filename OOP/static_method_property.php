<?php 

class MathCalculator
{
    private $number;
    static $name;
    static function fibonacci($n)
    {
        //self::$name = 12;
        echo self::$name.'</br>';
        self::doSomething();
        echo "Fibonachi series up to {$n}<br>";
    }

    static function doSomething()
    {
        echo "Do Something<br>";
    }

    function factorial($n)
    {
        self::$name = "ABCD";
        self::doSomething();
        $this->doSomething();
        $this->number = 12;
        echo "Calculating factorail of {$n}<br>";
    }
}

$mathc = new MathCalculator();
$mathc->factorial(8);

MathCalculator::fibonacci(7);
echo MathCalculator::$name;

?>