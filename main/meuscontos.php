<?php include 'includes/header.php'; ?>


<div class='container'>
    <h2>Meus contos:</h2>
    <!--TODO Adicionar uma barra de pesquisa aqui-->
    <?php
    require 'includes/conexão.php';

    $autor =  $_SESSION['usuario'];
    $sql = "SELECT * FROM contos WHERE autor = '$autor'";    

    $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
    $pc = max(1, $pagina);
    $totalPorPag = 4;

    $inicio = ($pc - 1) * $totalPorPag;

    $limite = mysqli_query($conn, "$sql LIMIT $inicio, $totalPorPag");
    $todos = mysqli_query($conn, $sql);

    $tr = mysqli_num_rows($todos); // verifica o número total de registros
    $tp = ceil($tr / $totalPorPag); // verifica o número total de páginas

    $historias = array();

    while ($linha = mysqli_fetch_assoc($limite)) {
        $historias[] = array(
            'id' => $linha['id'],
            'titulo' => $linha['titulo'],
            'resenha' => $linha['resenha'],
            'conto' => $linha['conto']
        );
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

    // agora vamos criar os botões "Anterior e próximo"
    $anterior = max(1, $pc - 1);
    $proximo = min($tp, $pc + 1);
    if ($pc > 1) {
        echo " <a href='?pagina=$anterior'><- Anterior</a> ";
        echo "|";
    }
    if ($pc < $tp) {
        echo " <a href='?pagina=$proximo'>Próxima -></a>";
    }
    ?>
</div>

<?php include 'includes/footer.php'; ?>

