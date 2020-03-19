<?php
class Dir
{
    private $directories=[];
    private $files=[]; 
    function __construct($path)
    {
        if(is_readable($path))
        {
            $entries = scandir($path);
            foreach($entries as $entry)
            {
                if("."!=$entry && ".." != $entry)
                {
                    if(is_dir($entry))
                    {
                        array_push($this->directores,$entry);
                    }
                    else
                    {
                        array_push($this->files,$entry);
                    }
                }
            }
        }
    }

    function getDirectories()
    {
        return $this->directories;
    }
    function getFiles()
    {
        return $this->files;
    }
}

$directory = new Dir(getcwd());
echo '<pre>';
print_r($directory->getFiles());

?>