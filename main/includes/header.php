<?php 
  include "functions.php";
  $login = FALSE;
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <title>Horrorcraft: Histórias de Terror</title>
      <link rel="stylesheet" href="css\style.css">
  </head>
<body>
    <header>
      <h1 style="text-align:center">Horrorcraft: Histórias de Terror</h1>
      <hr style="width: 50%" margin="0 auto"/>    
    </header>
    <div class="navbar" >
    <ul>
      <li><a class="active" href="index.php">Inicio</a></li>
      <li><a href="historias.php">Contos</a></li>
      <li><a href="#perfil"><?php logado($login)?></a></li>
      <li><a href="upload.php">Upload</a></li>
    </ul>
  </div>  