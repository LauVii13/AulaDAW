<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>remove</title>
</head>
<body>
    <a href = "index.php">Home</a> | <a href = "consulta.php">Consulta</a>
        <hr>
        <h2>Altera Alunos</h2>

</body>
</html>

<?php
    include("conexaoBD.php");

    $ra = $_POST['ra'];
    $novoNome = $_POST['nome'];
    $novoCurso = $_POST['curso'];

    try{
        $stmt = $pdo->prepare('UPDATE alunosDaw SET nome = :novoNome, curso = :novoCurso WHERE ra = :ra');
        $stmt->bindParam(':novoNome', $novoNome);
        $stmt->bindParam(':novoCurso', $novoCurso);
        $stmt->bindParam(':ra', $ra);
        $stmt->execute();

        echo "Os dados do aluno de RA $ra foram alterados!";
    } catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
    }

    $pdo = null;
?>