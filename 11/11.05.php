<div class="titulo">Include|Require Once</div>


<?php

    //Verifica que o arquivo já foi carregado,
    //E não chama novamente
    
    include_once('11.05.01.php');

    echo "Variável = {$variavel}. <br>";
    $variavel = "Alterada";
    echo "Variável = {$variavel}. <br>";

?>