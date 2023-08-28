<?php 
function logado($login) {
    if ($login == TRUE) {
        echo "Perfil";
        return TRUE;
    }
    else {
        echo "Login";
    }
}
?>