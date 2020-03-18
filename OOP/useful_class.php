<?php

class RGB
{
    private $color;
    private $red;
    private $green;
    private $blue;

    function __construct($colorCode= '')
    {
        $this->color = ltrim($colorCode,'#');
        $this->parserColor();
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getRGBColor()
    {
        return array($this->red,$this->green,$this->blue);
    }
    public function readRGBColor()
    {
        echo "</br>";
        echo "Red = {$this->red}.</br>Green = {$this->green}.</br>Blue = {$this->blue}";
    }
    public function setColor($colorCode)
    {
        $this->color = ltrim($colorCode,'#');
        $this->parserColor();
    }

    private function parserColor()
    {
        if($this->color)
        {
            list($this->red,$this->green,$this->blue) = sscanf($this->color,'%02x%02x%02x');

            // echo $this->red;
            // echo "</br>";
            // echo $this->blue;
            //echo "<pre>";
            //print_r($colors);
        }
        else 
        {
            list($this->red,$this->green,$this->blue) = array(0,0,0);
        }
    }
    function getRed()
    {
        return $this->red;
    }
    function getGreen()
    {
        return $this->green;
    }
    function getBlue()
    {
        return $this->blue;
    }
}

$myColor = new RGB("#00ff00");
$myColor->readRGBColor();
echo '</br>'.$myColor->getGreen();

?>