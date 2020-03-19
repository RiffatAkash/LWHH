<?php

trait NumberSeriesOne
{
    private function numberSeriesA()
    {
        echo "Number Series A<br>";
    }
    function numberSeriesB()
    {
        $this->numberSeriesA();
        echo "Number Series B<br>";
    }
}
trait NumberSeriesTwo
{
    use  NumberSeriesOne;
     function numberSeriesC()
    {
        echo "Number Series C<br>";
    }
    function numberSeriesD()
    {
        echo "Number Series D<br>";
    }
}

class NumberSeries
{
    use NumberSeriesTwo;
}

$ns= new NumberSeries();
$ns->numberSeriesB();
$ns->numberSeriesC();
$ns->numberSeriesD();


?>