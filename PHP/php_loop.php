<?php
    $x = 1;
    $tabuada = 1;
    $cores = array("White", "Black", "Blue", "Green", "Red");

    /*  while($x <=10)
    {
        echo $x. " x " . $tabuada . " = " . ($x * $tabuada) . "<br>";
        $x++;
    } */

    /* for ($tabuada = 1; $tabuada <= 10; $tabuada++)
    {
        for ($x = 1; $x <= 10; $x++)
        {
             if($x == 6){
                //continue;
                break;
            } 

            echo $x. " x " . $tabuada . " = " . ($x * $tabuada) . "<br>";
        }
        echo"<br>";
    } */

    foreach($cores as $cor){
        echo "<span style= color:".$cor.">".$cor."</span>"."<br>";
    }