<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  require 'includes/header.php';
?>
<div class="container">
  <h1>Histórias que o povo conta</h1>
  <p>Explore os causos mais assombrados da internet. Escolha uma história abaixo para começar: <button class="btn" onclick="recarregarPagina()"><?="<tab><img src='img/dice.png' style='width: 15px'' alt='Refresh'>"?></button></p>

<?php
  require 'includes/conexão.php';
  $sql = "SELECT * FROM contos ORDER BY RAND()";
  $dados = mysqli_query($conn, $sql);

  $historias = array();
    
  $contador = 0; // Inicialize o contador

  while ($linha = mysqli_fetch_assoc($dados)) {
    if ($contador < 3) {
      $historias[] = array(
        'id' => $linha['id'],
        'titulo' => $linha['titulo'],
        'resenha' => $linha['resenha'],
        'conto' => $linha['conto']
      );
      $contador++; // Incrementa o contador
    } else {
      break; // Sai do loop depois de 3 histórias
    }
  }
  
  // Exibir cada história
  foreach ($historias as $historia) {
    echo "<ul class='story-list'>
            <li class='story-item'>
              <h2>{$historia['titulo']}</h2>
              <p>{$historia['resenha']}</p>
              <form action='conto.php' method='get'>
              <input type='hidden' name='id' id='id' value='{$historia['id']}'>
              <input class=a type='submit' value='Ler mais'>
            </form>
            </li>
          </ul>";
  }
?>

<a class="a" href="historias.php">Ver mais</a>

<script>
    function recarregarPagina() {
        location.reload();
    }
</script>

<?php include 'includes/footer.php'?>                    
    