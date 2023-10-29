<?php 
  include "functions.php";
  $login = $login_cookie = $_COOKIE['login'] ?? false;
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <title>Horrorcraft: Histórias de Terror</title>
      <link rel="stylesheet" href="css\style.css">
      <link rel="icon" href="https://icons.iconarchive.com/icons/microsoft/fluentui-emoji-mono/128/Octopus-icon.png" width="128" height="128">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  </head>
  <body>
    <header>
      <h1 style="text-align:center">Horrorcraft: Histórias de Terror</h1>
      <hr style="width: 50%" margin="0 auto"/>    
    </header>
    <div class="navbar">
      <ul>
        <li><a class="active" href="index.php">Inicio</a></li>
        <li><a href="historias.php">Contos</a></li>
        <li><a href="<?php echo mostraLink($login)?>"><?php mostraOpcao($login)?></a></li>
        <li>
          <?php if ($login) : ?>
            <a href="upload.php">Fazer upload</a>
            <?php else : ?>
            <a href='#'onclick='exibirMensagem(); return false'; title='Faça login para desbloquear'>
              <i class='fas fa-lock'></i> Upload
            </a>
          <?php endif; ?>
        </li>
      </ul>
    </div>
    <script>
      function exibirMensagem() {
        var confirmacao = confirm("Você precisa estar logado para fazer upload. Deseja fazer login agora?");
        if (confirmacao) {
          // Redirecione o usuário para a página de login
          window.location.href = "login.php";
        }
      }
    </script>
  </body>
</html>