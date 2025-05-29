<?php include "includes/header.php"?>

<div class="form-section">
        <form action="cadastro_script.php" method="post">
            <div class="form-group">
                <label for="usuario">Nome de usuário:</label>
                <input type="text" name="usuario" id="usuario" maxlength="50" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" required>
            </div>
            <div class="form-group">
            <label for="checkbox" style="display: inline-block;">
            <input type="checkbox" name="checkbox" id="checkbox">
            Declaro que aceito os <a id="termosLink" href="#">termos de serviço</a>
            </label>
            </div>
        <input class="btn" type="submit" value="Enviar">
    </form>
</div>

<?php include 'includes/footer.php'?>