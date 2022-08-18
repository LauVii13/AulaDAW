<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    <a href = "index.php">Home</a>
    <hr>
    <h2>Consulta de alunos</h2>

    <form method = "post">
        RA: <br>
        <input type = "text" size = "10" name = "ra">
        <input type = "submit" value = "Consultar">
</form>

<hr>

</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        include("conexaoBD.php");

        if(isset($_POST["ra"]) && (trim($_POST["ra"]) != "")){
            $ra = $_POST["ra"];
            $stmt = $pdo->prepare("select * from alunosDaw where ra= :ra order by curso, nome");
            $stmt->bindParam(":ra", $ra);
            
        }
        else{
            $stmt = $pdo->prepare("select * from alunosDaw order by curso, nome");
        }
        try {
            $stmt->execute();

            echo"<form method ='post'>";
            echo"<table border = '1px'>";
            echo"<tr>";
            echo "<th></th> <th>RA</th> <th>Nome</th> <th>Curso</th>";
            echo "</tr>";

            while ($row = $stmt->fetch()){
                echo "<tr>";
                echo "<td><input type = 'radio' name = 'raAluno' value = '" . $row['ra'] . "'></td>";
                echo "<td>" . $row['ra'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['curso'] . "</td>";
                echo "</tr>";
            }

            echo"<table><br>";

            echo"<button type = 'submit' formaction = 'remove.php'>Excluir Aluno</button>";

            echo "<button type = 'submit' formaction = 'edicao.php'>Editar Aluno</button>";

            echo "</form>";
        }
        catch (PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }

        $pdo = null;
    }