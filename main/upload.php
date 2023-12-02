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
            <!-- TODO Adicionar função de alterar background da historia-->

            <div class="theme-selection">
                <label for="tema1">Tema 1</label>
                <input type="radio" name="tema" id="tema1">
                <label for="tema2">Tema 2</label>
                <input type="radio" name="tema" id="tema2">
                <label for="tema3">Tema 3</label>
                <input type="radio" name="tema" id="tema3">
            </div>

            <div class="form-group">
                <label for="conto">Conto:</label>
                <textarea name="conto" id="conto" rows="12" required></textarea>
            </div>
            <!-- TODO sistema de tags-->
            <div class="form-group">
                <label for="tags">Tags: (separadas por vírgula)</label>
                <input type="text" name="tags" id="tags">
            </div>
        <input class="btn" type="submit" value="Enviar">
        </form>
    </div>
    
    <?php include 'includes/footer.php'?> 