<?php

class Student
{
    function __construct($name,$age)
    {
        $this->name=$name;
        if($age < 4 )
        {
            throw new Exception("Too Young",1001);
        }
        else if($age>35)
        {
            throw new Exception("Too Old",1002);
        }
        $this->age=$age; 
    }
}

try
{
    $a= new Student("Akash",40);
    echo "it will never run";
}
catch(Exception $e)
{
    echo $e->getcode().":".$e->getMessage();
}
finally
{
    // echo '</br>';
    // echo "it will display";
}



?>