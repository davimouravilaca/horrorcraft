<?php include "includes/header.php"?>

<div class="form-section">
        <form action="login_script.php" method="post">
            <div class="form-group">
                <label for="usuario">Usuário:</label>
                <input type="text" name="usuario" id="usuario" maxlength="50" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha">
            </div>
        <p>Não tem uma conta? <a class="a" href="cadastro.php">Registre-se aqui</a></p>
        <input class="btn" type="submit" value="Logar" id="entrar" name="entrar">
    </form>
</div>

<?php include 'includes/footer.php'?>