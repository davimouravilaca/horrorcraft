<?php 
function mostraOpcao ($login) {
    if ($login) {
        echo "Perfil";
    } else {
        echo "Login";
    }
}

function mostraLink($login) {
    if ($login) {
        $link = "perfil.php";
    } else {
        $link = "login.php";
    }
    return $link;
}
?>