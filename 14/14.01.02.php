<div class="titulo">Limpar Sessão</div>


<?php 
    session_start();
    session_destroy();

    header('Location: exercicio.php?dir=14&file=14.01');
?>
