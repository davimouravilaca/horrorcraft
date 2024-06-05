<?php 
    require 'includes/header.php';
    include 'includes/conexão.php';
    $liked = false; // ou a lógica para definir se o usuário curtiu ou não
?>

<?php

    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM contos WHERE id = $id";

    $dados = mysqli_query($conn, $sql);

    $linha = mysqli_fetch_assoc($dados);

?>

<div class="container">
    <div class="story">
        <h2 style="display: inline-block;"><?=$linha['titulo']?></h2>
        <p>by <?=$linha['autor']?></p>
        <p><?= nl2br($linha['conto']) ?></p>
        <p style="text-align: right;">
            <a href=""><img style="max-width: 25px; vertical-align: middle;" src="img/like<?php echo $liked ? "on" : "off"; ?>.png" alt="Curtir"></a> Curtir: <?=$linha['curtidas'] ?? 0; ?>
        </p>
    </div>
</div>

<p style="text-align:center">Você chegou ao fim dessa história. Se gostou não esqueça de favoritar! <a class="a" href="index.php"> Ver novas histórias.</a></p>
