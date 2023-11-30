<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'includes/header.php';

echo "História enviada com sucesso.";

if (!isset($_SESSION['form_submitted'])) {
    header("Location: index.php");
    exit();
}

unset($_SESSION['form_submitted']);

include 'includes/footer.php';
?>