<?php require 'includes/header.php'?>
    
    <div class="form-section">
        <form action="envio.php" method="post">
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" maxlength="50" required>
            </div>
            <div class="form-group">
                <label for="resenha">Resenha:</label>
                <input type="text" name="resenha" id="resenha">
            </div>
            <div class="form-group">
                <label for="conto">Conto:</label>
                <textarea name="conto" id="conto" rows="12" required></textarea>
            </div>
        <input class="btn" type="submit" value="Enviar">
        </form>
    </div>
    
    <?php include 'includes/footer.php'?> 