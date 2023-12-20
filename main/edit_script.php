<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require "includes/header.php";
include "includes/conexão.php";

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$resenha = $_POST['resenha'];
$conto = $_POST['conto'];

// Usando prepared statements para evitar injeção de SQL
$sql = "UPDATE `contos` SET `titulo` = ?, `resenha` = ?, `conto` = ? WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "sssi", $titulo, $resenha, $conto, $id);
    if (mysqli_stmt_execute($stmt)) {
        echo "Conto editado com sucesso: ";
    } else {
        echo "Conto NÃO foi alterado";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Erro na preparação da declaração SQL";
}

?>
<a href="index.php"> Voltar ao início.</a>

<?php
require "includes/footer.php";
?>
