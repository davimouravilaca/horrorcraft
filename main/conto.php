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
        <h2><?=$linha['titulo']?></h2>
        <p>by <?=$linha['autor']?></p>
        <p><?= nl2br($linha['conto']) ?></p>
        <div style="text-align: right;">
        <p>
        <form action="curtidas.php" method="post">
        <input type='hidden' name='id' id='id' value='<?=$linha['id']?>'>
        <input type="image" style="max-width: 25px; vertical-align: middle;" src="img/like<?php echo $liked ? "on" : "off"; ?>.png" alt="Curtir">
        Curtidas: <?=$linha['curtidas']; ?>
        </p>
        </div>
    </div>
</div>

<p style="text-align:center">Você chegou ao fim dessa história. Se gostou não esqueça de favoritar! <a class="a" href="index.php"> Ver novas histórias.</a></p>
