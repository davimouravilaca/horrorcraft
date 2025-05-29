<?php
require 'includes/header.php';
include "includes/conexão.php";

// Verificar se o usuário está logado
session_start();
if(!isset($_SESSION['id'])) {
    // Se o usuário não estiver logado, redirecione-o para a página de login
    header("Location: login.php"); // Altere 'login.php' para a página de login do seu sistema
    exit();
}

// Obter o ID do usuário logado a partir da session
$userId = $_SESSION['id'];

if(isset($_POST['id'])) {
    $historiaId = $_POST['id'];

    // Verificar se o usuário já favoritou a história
    $query = "SELECT favoritadas FROM usuarios WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $favoritadas = explode(',', $row['favoritadas']);
    
    if(in_array($historiaId, $favoritadas)) {
        // Se a história já estiver nos favoritos, remove-a
        $favoritadas = array_diff($favoritadas, array($historiaId));
        $curtidasAction = -1; // Ação de decrementar as curtidas
    } else {
        // Se a história não estiver nos favoritos, adiciona-a
        $favoritadas[] = $historiaId;
        $curtidasAction = 1; // Ação de incrementar as curtidas
    }

    // Atualizar os dados no banco de dados
    $favoritadasString = implode(',', $favoritadas);
    $updateQuery = "UPDATE usuarios SET favoritadas = ? WHERE id = ?";
    $stmt = $conn->prepare($updateQuery);
    $stmt->bind_param("si", $favoritadasString, $userId);
    $stmt->execute();

    // Incrementar ou decrementar as curtidas na tabela contos
    $updateCurtidasQuery = "UPDATE contos SET curtidas = curtidas + ? WHERE id = ?";
    $stmt = $conn->prepare($updateCurtidasQuery);
    $stmt->bind_param("ii", $curtidasAction, $historiaId);
    $stmt->execute();

    // Redirecionar de volta para a página anterior ou para onde quer que você deseje após a ação
    header("Location: ".$_SERVER['HTTP_REFERER']);
    exit();
}
?>
