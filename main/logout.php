<?php
// Inicie a sessão para acessar e manipular as variáveis de sessão
session_start();

// Destrua a sessão
session_destroy();

// Redirecione para a página de login (ou qualquer outra página desejada após o logout)
header("Location: index.php");
exit();
?>
