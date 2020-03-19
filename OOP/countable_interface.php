<?php 

class DistricCollection implements iteratoraggregate,Countable
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
    function count()
    {
        return count($this->district);
    }
}

$district = new DistricCollection;
$district->add('Dhaka');
$district->add('Rajshai');
$district->add('Khulna');
$district->add('Barisal');
$district->add('Sylet');
$district->add('Nano IT');

echo count($district);

?>