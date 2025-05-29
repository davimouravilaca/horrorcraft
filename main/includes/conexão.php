<?php 
$server = "localhost";
$user = "username";
$pass = "strong password";
$bd = "historias";

// Tenta estabelecer a conexão com o banco de dados
$conn = mysqli_connect($server, $user, $pass, $bd);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Erro de conexão com o banco de dados: " . mysqli_connect_error());
}
?>
