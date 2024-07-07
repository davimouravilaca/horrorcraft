<?php
include "includes/conexão.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$entrar = $_POST['entrar'];
$connect = $conn;

session_start(); 

if (isset($entrar)) {

    $verifica = mysqli_query($connect, "SELECT id FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'") or die("Erro ao selecionar");

    if (mysqli_num_rows($verifica) <= 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location.href='login.php';</script>";
        die();
    } else {

        $row = mysqli_fetch_assoc($verifica);
        $id = $row['id'];

        $_SESSION["usuario"] = $usuario;
        $_SESSION["id"] = $id;
        $_SESSION["login"] = true; 


        header("Location: index.php");
        exit();
    }
}
?>
