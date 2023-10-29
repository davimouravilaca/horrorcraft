<?php include "includes/header.php"; ?>

<div class="container" style="text-align: center">
    <h2>Perfil do usuário:</h2>
    <h3><?="Nickname: " . $usuario = $_COOKIE['usuario'] ?></h3>
</div>

<?php
// Inclua o arquivo de conexão aqui
require 'includes/conexão.php';

// Consulta para obter a data de cadastro do usuário
$sqlUsuario = "SELECT dataCadastro FROM usuarios WHERE usuario = '$usuario'";
$dadosUsuario = mysqli_query($conn, $sqlUsuario);

// Verifique se a consulta foi bem-sucedida antes de continuar
if ($dadosUsuario) {
    $linhaUsuario = mysqli_fetch_assoc($dadosUsuario);
    $dataCadastro = $linhaUsuario['dataCadastro'];

    // Exibindo a data de cadastro do usuário
    echo "<div class='container' style='text-align: center'>
            <h3>Data de cadastro do usuário: $dataCadastro</h3>
          </div>";

    // Consulta para obter as histórias do usuário
    $sqlContos = "SELECT * FROM contos WHERE autor = '$usuario'";
    $dadosContos = mysqli_query($conn, $sqlContos);

    // Verifique se a consulta foi bem-sucedida antes de continuar
    if ($dadosContos) {
        // Contagem do número de histórias
        $numHistorias = mysqli_num_rows($dadosContos);

        // Exibindo o número de histórias publicadas pelo usuário
        echo "<div class='container' style='text-align: center'>
                <h3>Número de histórias publicadas: $numHistorias</h3>
              </div>";
    } else {
        // Trate o caso em que a consulta das histórias falhou
        echo "Erro na consulta das histórias: " . mysqli_error($conn);
    }
} else {
    // Trate o caso em que a consulta do usuário falhou
    echo "Erro na consulta do usuário: " . mysqli_error($conn);
}

?>

<?php include 'includes/footer.php'; ?>
