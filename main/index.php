<?php
  require 'includes\header.php';
?>
<div class="container">
  <h1>Bem-vindo aos Contos de Terror</h1>
  <p>Explore os contos assustadores que vão te deixar sem dormir! Escolha um dos contos abaixo para começar: <button class="btn" onclick="recarregarPagina()"><?="<tab>\u{1F3B2}"?></button></p>
<script>
    function recarregarPagina() {
        location.reload();
    }
</script>
<?php
  include 'includes\conexão.php';
  $sql = "SELECT * FROM contos";
  $dados = mysqli_query($conn, $sql);
  while ($linha = mysqli_fetch_assoc($dados)){
    $titulo = $linha['titulo'];
    $resenha = $linha['resenha'];
  }
?>

<?php
for ($i = 0; $i < 3; $i++) {
  echo "<ul class='story-list'>
    <li class='story-item'>
      <h2>$titulo</h2>
      <p>$resenha</p>
      <a href='#link'>Ler mais</a>
    </li>
  </ul>";}
?>

<a href="#contos">Ver mais</a>

<?php include 'includes\footer.php'?>                    
    