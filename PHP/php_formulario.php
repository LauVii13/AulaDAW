<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
</head>

<body>
    <h1>Cadastri de alunos</h1>

<form method="post" >
    RA:<br>
    <input type = "text" name = "ra">

    <br><br>

    Nome:<br>
    <input type="text" name = "nome">

    <br><br>

    Curso:<br>
    <input type = "text" name = "curso">

    <br>

    <br>
    <input type="submit" name="botao ">
</form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] === "POST")
    {
        $ra = $_POST["ra"];
        $nome = $_POST["nome"];
        $curso = $_POST["curso"];

        if((trim($ra) == "") || (trim($nome) == "") || (trim($curso) == ""))
        {
            echo "preencha todos os campos";
        }
        else{
            echo"Sucesso!";
        }
    }