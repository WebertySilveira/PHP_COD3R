<div class="titulo">Require & Retorno</div>


<?php

    $valorRetorno = require('11.04.01.php');
    echo $valorRetorno . '<br>';
    echo $variavelRetornada . '<br>';
    echo __DIR__  . '<br>';


    $valorRetorno2 = require(__DIR__ . '/11.04.01.php');
    echo $valorRetorno2 . '<br>';
    echo $variavelRetornada . '<br>';
?>