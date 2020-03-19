<?php

class Color
{
    public $color;
    function __construct($color)
    {
        $this->color=$color;
    }
    function setColor($color)
    {
        $this->color=$color;
    }
}

class FaceColor
{
    public $data;
    public $color;
    function __construct($data,$color)
    {
        $this->data=$data;
        $this->color=new Color($color);
    }
    function updateColor($color)
    {
        $this->color->setColor($color);
    }
    function __clone()
    {
        $this->color=clone  $this->color;
    }
}

$fc1 = new FaceColor('Some Data','red');
echo '<pre>';
print_r($fc1);

$fc2 =clone $fc1;

echo '<pre>';
print_r($fc2);


$fc2->updateColor('green');
echo '<pre>';
print_r($fc1);
print_r($fc2);

?>