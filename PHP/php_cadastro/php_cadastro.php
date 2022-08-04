<?php

$op = $_GET["op"];
echo "Operação: " . $op;
echo "<hr>";

$ra = $_POST["ra"];
$nome = $_POST["nome"];
$curso = $_POST["curso"];

if($op == "save")
{
    echo "Salvando...";
    echo "<br><br>";

    echo $ra;
    echo "<br>";

    echo $nome;
    echo "<br>";

    echo $curso;
    echo "<br>";
}
else if ($op == "del")
{
    echo "apagando...";
}
?>
