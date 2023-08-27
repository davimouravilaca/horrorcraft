<?php 
    require 'includes\header.php';
    include 'conexao.php';
?>
<?php

    $id = $_POST['id'] ?? '';
    $sql = "SELECT * FROM contos WHERE id = $id";

    $dados = mysqli_query($conn, $sql);

    $linha = mysqli_fetch_assoc($dados);

?>

    <div class="story">
        <h2><?=$linha['titulo']?></h2>
        <p><?=$linha['conto']?></p> 
    </div>

<?php require 'includes\footer.php'?>  