<?php

trait NumberSeriesOne
{
    function numberSeriesA()
    {
        echo "Number Series A<br>";
    }
}

trait NumberSeriesTwo
{
    function numberSeriesA()
    {
        echo "Number Series A<br>";
    }
}


class NumberSeries
{
    use NumberSeriesOne,NumberSeriesTwo
    {
        NumberSeriesOne::numberSeriesA as numberSeriesAA;
        NumberSeriesTwo::numberSeriesA as numberSeriesAAA;
    }
    function numberSeriesA()
    {
        echo " Class Number Series A<br>";
    }
}

$ns= new NumberSeries();
$ns->numberSeriesA();
$ns->numberSeriesAA();
$ns->numberSeriesAAA();


?>