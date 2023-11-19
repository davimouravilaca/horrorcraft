<?php 
    require 'includes/header.php';
    include 'includes/conexão.php';
?>
<?php

    $id = $_POST['id'] ?? '';
    $sql = "SELECT * FROM contos WHERE id = $id";

    $dados = mysqli_query($conn, $sql);

    $linha = mysqli_fetch_assoc($dados);

?>
    <div class="container">
    <div class="story">
        <h2><?=$linha['titulo']?></h2>
        <p><?=$linha['conto']?></p> 
    </div>
    </div>

    <p style="text-align:center">Você chegou ao fim dessa história. Que tal ver o que mais tem de especial no seu feed? <a class="a" href="index.php">Vamos!</a></p>
<?php include 'includes/footer.php'?>  