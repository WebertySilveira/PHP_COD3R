<div class="titulo">Error Handler</div>


<?php 

    function filtrarMensagem($error, $errorstring){
        $text = 'include';
        //$text = 'by zero';

        //Gera um valor, nega pra dar um booleano
        //Nega novamente para dar o certo
        return !!stripos(" $errorstring", $text);
    }

    //Filtra por Warning
    set_error_handler("filtrarMensagem", E_WARNING);

    echo 4/0 . '<br>';
    include 'arquivo_inexistente.php';

?>
