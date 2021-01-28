<div class="titulo">Sessão</div>


<?php 
    
    session_start();

    if (!$_SESSION['nome']) {
        $_SESSION['nome'] = 'Weberty';
    }

    if (!$_SESSION['email']) {
        $_SESSION['email'] = 'weberty.silveira.sousa@gmail.com';
    }

    print_r($_SESSION);

?>

<p>
    <a href="exercicio.php?dir=14&file=14.01.01">Alterar Sessão</a>
</p>

<p>
    <a href="exercicio.php?dir=14&file=14.01.02">Limpar Sessão</a>
</p>