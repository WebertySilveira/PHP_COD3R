<div class="titulo">Gerenciando Sessão</div>


<?php 
    
    session_start();

    //Se manter a mesma até matar o processo
    echo session_id() . '<br>';

    // & - Referencia de memória
    $contador = &$_SESSION['contador'];
    // Se contador setado, contador mais 1, senão recebe 1
    $contador = $contador ? $contador + 1 : 1;
    echo $contador;


    // Aumenta a segurança pois gera novos ids constantemente
    if ($_SESSION['contador'] % 5 === 0) {
        session_regenerate_id();
    }

    if ($_SESSION['contador'] >= 10) {
        session_destroy();
    }

?>