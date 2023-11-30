<?php
include "includes/conexão.php";

$usuario = $_POST['usuario'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha'];
$connect = $conn;

session_start(); // Inicia a sessão

if (isset($entrar)) {
    $verifica = mysqli_query($connect, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'") or die("Erro ao selecionar");

    if (mysqli_num_rows($verifica) <= 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location.href='login.php';</script>";
        die();
    } else {
        $_SESSION["usuario"] = $usuario; // Atribui o nome de usuário à sessão
        $_SESSION["login"] = true; // Atribui um marcador de login à sessão
        header("Location: index.php");
    }
}
?>
