<?php

trait NumberSeriesOne
{
    private function numberSeriesA()
    {
        echo "Number Series A</br>";
    }
    function numberSeriesB()
    {
        $this->numberSeriesA();
        echo "Number Series B</br>";
    }
}
trait NumberSeriesTwo
{
    function numberSeriesC()
    {
        echo "Number Series C</br>";
    }
    function numberSeriesD()
    {
        echo "Number Series D</br>";
    }
}
class numberSeries
{
    use NumberSeriesOne,NumberSeriesTwo;
}

$ns = new numberSeries();
//$ns->numberSeriesA();
$ns->numberSeriesB();
$ns->numberSeriesC();
?>