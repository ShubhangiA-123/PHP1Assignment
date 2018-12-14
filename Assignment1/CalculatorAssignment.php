<?php

echo "Welcome to MyCalculator!!!!!!\n";

    $arr = explode(",", $argv[2]);
    
    $a= sizeof($arr);
    
    if($argv[1]=='Add')
    {
        $add=0;
        for($i=0;$i<$a;$i++)
        {
             $add = $add + $arr[$i];
        }
        echo "Addition of Numbers:" . $add . "\n";
        
    }

    elseif($argv[1]=='Sub')
    {
        $Sub=$arr[0];
        for($i=1;$i<$a;$i++)
        {
             $Sub =$Sub - $arr[$i];
        }
        echo "Substraction of Numbers:" . $Sub . "\n";
        
    }

    elseif($argv[1]=='Mul')
    {
        $Mul=1;
        for($i=0;$i<$a;$i++)
        {
             $Mul = $Mul * $arr[$i];
        }
        echo "Multipication of Numbers:" . $Mul . "\n";
        
    }
    
    elseif($argv[1]=='Div')
    {
        $Div=$arr[0];
        for($i=1;$i<$a;$i++)
        {
             $Div =$Div / $arr[$i];
        }
        echo "Division of Numbers:" . $Div . "\n";
        
    }
 
?>