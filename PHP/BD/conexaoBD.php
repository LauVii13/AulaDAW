<?php

    try {

        $pdo = new PDO('mysql:host=143.106.241.3;dbname=cl200155;charset=utf8', 'cl200155', 'cl*13022005');

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo 'Impossível concetar BD: ' . $e . '<br><br>';
    }


?>