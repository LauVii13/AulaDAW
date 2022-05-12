<?php

    function calcMedia($n1, $n2){

        if((trim($n1) == "") || (trim($n2) == "")){
            echo "As duas notas são obigatórias";
            return;
        }

        $media = ($n1 + $n2) / 2;

        echo "Média = " . $media . "<br>";

        if ($media >= 6.0){
            echo "<span id = 'aprovado'>APROVADO!</span>";
        }
         else{
            echo "<span id = 'reprovado'>REPROVADO!</span>";
        }
    }

    calcMedia($_GET["nota1"], $_GET["nota2"]);
?>

<!DOCTYPE html>
    <head>
        <title>Média calc</title>
        <style >
            #reprovado{
                background-color: red;
                color: white;
                font-weight: bold;
            }

            #aprovado{
                background-color: green;
                color: white;
                font-weight: bold;
            }
        </style>

    </head>
    <body>
        
    </body>
</html>