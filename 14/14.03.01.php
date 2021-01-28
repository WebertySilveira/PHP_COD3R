<div class="titulo">Login</div>


<?php 
    
    session_start();

    echo "Teste";

    if (condition) {
        session_destroy();
        // limpa
        unset($_COOKIE['usuario']);
        // Limpa dentro do browser
        setcookie('usuario', '');
    }
?>