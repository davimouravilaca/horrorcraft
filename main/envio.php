<?php require 'includes\header.php';
        require 'includes\dateConf.php';

        include "includes\conexão.php";
        $titulo = $_POST['titulo'];
        $resenha = $_POST['resenha'];
        $conto = $_POST['conto'];
        $autor = $_COOKIE['usuario'];
        $dataPubli = date('d/m/Y');
        
        $sql ="INSERT INTO `contos` (`titulo`, `resenha`, `conto`, `autor`, `data_publicacao`) VALUES ('$titulo', '$resenha', '$conto', '$autor', '$dataPubli')";
        
        if(mysqli_query($conn,$sql)){
            echo "História enviada com sucesso.";
        }
        require 'includes\footer.php';