<?php

include "includes/header.php";
require 'includes/conexão.php';

if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}

$usuario = $_SESSION["usuario"];

$sqlUsuario = "SELECT dataCadastro FROM usuarios WHERE usuario = '$usuario'";
$dadosUsuario = mysqli_query($conn, $sqlUsuario);

if ($dadosUsuario) {
    $linhaUsuario = mysqli_fetch_assoc($dadosUsuario);
    $dataCadastro = $linhaUsuario['dataCadastro'];

    echo "<div class='form-section' >
            <h2 style='text-align:center'>Perfil do usuário:</h2>
            <div class='circulo-centralizado'>
            <div class='circulo'>
            <img src='/horrorcraft/main/img/foto.png'>
            </div>
            </div>
            <h3>Nickname: $usuario</h3>
            <h3>Data de cadastro do usuário: $dataCadastro</h3>
          ";

    $sqlContos = "SELECT * FROM contos WHERE autor = '$usuario'";
    $dadosContos = mysqli_query($conn, $sqlContos);

    if ($dadosContos) {

        $numHistorias = mysqli_num_rows($dadosContos);

        echo "
                <h3>Histórias publicadas: <a href='meuscontos.php'>$numHistorias</a></h3>
                ";
    } else {

        echo "Erro na consulta das histórias: " . mysqli_error($conn);
    }
} else {

    echo "Erro na consulta do usuário: " . mysqli_error($conn);
}
?>
<!-- TODO sistema de like e badges-->
<h3>Histórias Favoritadas: </h3>
<h3>Badges Conquistadas: </h3>
</div>

<div class="container" style="text-align: center">
    <form action="logout.php" method="post">
        <input class="submit-btn" type="submit" value="Logout"/>
    </form>
</div>

<?php include 'includes/footer.php'; ?>
