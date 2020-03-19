<?php

trait NumberSeriesOne
{
    function numberSeriesA()
    {
        echo "Number Series A<br>";
        parent::numberSeriesA();
    }
    function numberSeriesB()
    {
        echo "Number Series B<br>";
    }
}

class SomeClass
{
    function numberSeriesA()
    {
        echo " Class Number Series A<br>";
    }
}

class NumberSeries extends SomeClass
{
    use NumberSeriesOne;
}

$ns= new NumberSeries();
$ns->numberSeriesA();


?>