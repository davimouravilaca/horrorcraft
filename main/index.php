<?php
  require 'includes\header.php';
?>
<div class="container">
  <h1>Bem-vindo aos Contos de Terror</h1>
  <p>Explore os contos assustadores que vão te deixar sem dormir! Escolha um dos contos abaixo para começar: <button class="btn" onclick="recarregarPagina()"><?="<tab>\u{1F3B2}"?></button></p>
  
<?php
  require 'includes\conexão.php';
  $sql = "SELECT * FROM contos";
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
              <a href='#link'>Ler mais</a>
            </li>
          </ul>";
  }
?>

<a href="#contos">Ver mais</a>

<script>
    function recarregarPagina() {
        location.reload();
    }
</script>

<?php include 'includes\footer.php'?>                    
    