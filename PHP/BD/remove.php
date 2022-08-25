<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>remove</title>
</head>
<body>
    <a href = "index.php">Home</a> | <a href = "consulta.php">Consulta</a>
        <hr>
        <h2>Remove Alunos</h2>

</body>
</html>

<?php
    if(!isset($_POST["raAluno"])){
        echo "Selecione o aluno a ser excluído!";
    }
    else{
        include ("ConexaoBD.php");
        $ra = $_POST["raAluno"];

        try{    
            $stmt = $pdo->prepare('DELETE FROM alunosDaw WHERE ra = :ra');
            $stmt -> bindParam(':ra', $ra);
            $stmt -> execute();

            $stmt->rowCount() . "Aluno com o RA $ra foi  excluido";
        }
        catch(Exception $e){
            echo 'Error: ' . $e -> getMessage();
        }

        $pdo = null;
    }



?>