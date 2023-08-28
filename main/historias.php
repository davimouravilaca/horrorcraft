<?php include 'includes\header.php'?>

<div class='container'>
<?php
  require 'includes\conexão.php';
  $sql = "SELECT * FROM contos";
  $dados = mysqli_query($conn, $sql);

  $historias = array();
    
  $contador = 0; // Inicialize o contador

  while ($linha = mysqli_fetch_assoc($dados)) {
    if ($contador < 15) {
      $historias[] = array(
        'id' => $linha['id'],
        'titulo' => $linha['titulo'],
        'resenha' => $linha['resenha'],
        'conto' => $linha['conto']
      );
      $id = $linha['id'];
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
              <form action='conto.php' method='post'>
              <input type='hidden' name='id' id='id' value='{$historia['id']}'>
              <input class=a type='submit' value='Ler mais'>
            </form>
            </li>
          </ul>";
  }
?>
</div>
<?php include 'includes\footer.php';?>
