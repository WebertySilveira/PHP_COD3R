<div class="titulo">Alterar Sessão</div>


<?php 
    
    session_start();
    print_r($_SESSION);
?>

<p>
    <b>Nome:</b> <?= $_SESSION['nome']; ?>
</p>

<p>
    <b>Email:</b> <?= $_SESSION['email']; ?>
</p>

<?php
    $_SESSION['nome'] = 'Weberty Silveira';
?>

<p>
    <a href="exercicio.php?dir=14&file=14.01">Retornar</a>
</p>
