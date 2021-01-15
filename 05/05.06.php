<div class="titulo">Desafio de variáveis variáveis</div>


<?php

    $a = 'Nossa';
    $Nossa = 'Eu';
    $Eu = 'consegui';
    $consegui = 'responder';
    $responder = 'esse';
    $esse = 'desafio';

    echo "Nossa! eu consegui responder esse desafio (Apenas usando variáveis variáveis)";
    echo '<br>';
    echo '<br>';
    echo "$a! {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}.";

?>