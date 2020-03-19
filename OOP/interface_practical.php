<?php 

class DistricCollection implements iteratoraggregate
{
    private $district; 

    function __construct()
    {
        $this->district = array();
    }

    function add($district)
    {
        array_push($this->district,$district);
    }

    function getIterator() 
    {
        return new ArrayIterator($this->district);
    }
}

$district = new DistricCollection;
$district->add('Dhaka');
$district->add('Rajshai');
$district->add('Khulna');
$district->add('Barisal');
$district->add('Sylet');

foreach($district as $values)
{
    echo $values.'<br>';
}
?>