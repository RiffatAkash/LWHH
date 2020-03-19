<?php

    //echo getcwd();

    $entries = scandir(getcwd());
    //print_r($entries);

    foreach($entries as $entry)
    {
        if("."!=$entry && ".." != $entry)
        {
            if(is_dir($entry))
            {
                echo "[d] {$entry}<br>";
            }
            else
            {
                echo "[f] {$entry}<br>";
            }
        }
    }

    function countDir($dir)
    {
        $count=1;
        $entries = scandir($dir);
        foreach($entries as $entry)
        {
            if("."!=$entry && ".." != $entry)
            {
                if(is_dir($entry))
                {
                    $count++;
                }
            }
        }

        return $count;
    }

    echo countDir(getcwd());
    

?>