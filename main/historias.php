<?php include 'includes\header.php';
      include 'includes\getid.php';
?>

<div class='container'>
<?php
  require 'includes\conexão.php';
  $sql = "SELECT * FROM contos";
  $dados = mysqli_query($conn, $sql);

  $historias = array();
    
  $contador = 0; // Inicialize o contador

  $id = $_POST['id'] ?? '';

  while ($linha = mysqli_fetch_assoc($dados)) {
    if ($contador < 15) {
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
              <a href='conto.php?$id'>Ler mais</a>
            </li>
          </ul>";
  }
?>
</div>
<?php include 'includes\footer.php';?>