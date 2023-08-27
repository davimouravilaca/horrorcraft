<?php require 'includes\header.php'?>
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
<?php require 'includes\footer.php'?>  