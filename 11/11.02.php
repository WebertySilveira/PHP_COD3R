<div class="titulo">Include em Função</div>


<?php

    function carregarArquivo(){
        include '11.01.01.php';
        echo $variavel . '<br>';
        echo soma(3,1) . '<br>';
    }

    echo carregarArquivo();
?>