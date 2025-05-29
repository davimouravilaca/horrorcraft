<?php
// TODO criptografar senha antes de jogar no banco de dados

include "includes/conexão.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];

$query_select = "SELECT usuario FROM usuarios WHERE usuario = '$usuario'";
$connect = $conn;
$select = mysqli_query($conn, $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['usuario'];

if ($usuario == "" || $usuario == null) {
    echo "<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');wphpindow.location.href='cadastro.php';</script>";
} else {
    if ($logarray == $usuario) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Esse usuario já existe');window.location.href='cadastro.php';</script>";
        die();
    } else {
        $query = "INSERT INTO usuarios (usuario, senha, email) VALUES ('$usuario', '$senha', '$email')";
        $insert = mysqli_query($conn, $query);

        if ($insert) {
            echo "<script language='javascript' type='text/javascript'>
            alert('Usuário cadastrado com sucesso!');window.location.href='login.php'</script>";
        } else {
            echo "<script language='javascript' type='text/javascript'>
            alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.php'</script>";
        }
    }
}
?>