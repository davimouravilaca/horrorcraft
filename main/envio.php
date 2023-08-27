<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio</title>
</head>
<body>
    <?php 
        include "includes\conexão.php";
        $titulo = $_POST['titulo'];
        $resenha = $_POST['resenha'];
        $conto = $_POST['conto'];
        
        $sql ="INSERT INTO `contos` (`titulo`, `resenha`, `conto`) VALUES ('$titulo', '$resenha', '$conto')";
        
        if(mysqli_query($conn,$sql)){
            echo "História enviada com sucesso.";
        }
    ?>
<?php include 'includes\footer.php'?>  