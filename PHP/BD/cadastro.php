<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
   
    <form method = "post">
    RA: <br>
    <input type = "text" size = "10" name = "ra"> <br> <br>

    Nome: <br>
    <input type = "text" size = "30" name = "nome"> <br> <br>

    Curso:<br>
    <select name = "curso">
        <option></option>
        <option value = "Informática">Desenvolvimento de Sistemas</option>

        <option value = "Informatica">Edificações</option>
        <option value = "Enfermagem">Enfermagem</option>
        <option value = "Geodesia e cartografia">Geodésia e Cartografia</option>
        <option value = "Mecanica">Mecânica</option>
        <option value = "Qualidade">Qualidade</option>
    
    </select>
    <input type="submit" value = "Cadastrar" >
</form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    try {
        $ra = $_POST["ra"];
        $nome = $_POST["nome"];
        $curso = $_POST["curso"];

        if((trim($ra) == "") || (trim($nome) == "")){
            echo "<span id = 'warning'> RA e nome são obrigatórios </span>";
        } 
        else {
            include("conexaoBD.php");

            $stmt = $pdo->prepare("select * from alunosDaw where ra = :ra");
            $stmt->bindParam(':ra', $ra);
            $stmt->execute();

            $rows = $stmt->rowCount();

            if ($rows <= 0) {
                $stmt = $pdo->prepare("insert into alunosDaw (ra, nome, curso) values(:ra, :nome, :curso)");
                $stmt->bindParam(':ra', $ra);
                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':curso', $curso);
                $stmt->execute();

                echo "<span id='sucess'> Aluno Cadastrado!</span>";
            }
            else{
                echo "<span id='error'>Ra já existete!</span>";
            }
        }
    } 
    catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

    $pdo = null;

}