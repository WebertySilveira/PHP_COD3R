<div class="titulo">Constantes</div>


<?php

    /**CONST
     * Atribui apenas valores literais
     * 
     * DEFINE 
     * Tem mais flexibilidade, permite variáveis
     */


    define('TAXA_DE_JUROS', 5.9);
    echo TAXA_DE_JUROS;

echo '<br>';

    const NOVA_TAXA = 5; 
    echo NOVA_TAXA;

echo '<br>';

    $valorVariavel = 2.8;
    define('NOVISSIMA_TAXA', $valorVariavel + 2);
    echo NOVISSIMA_TAXA;

echo '<br>';

    const VELHA_TAXA = 2 + 2;
    echo VELHA_TAXA;

    
    echo '<br>' . PHP_VERSION;
    echo '<br>' . PHP_INT_MAX;

    echo '<br>' . __LINE__;
    echo '<br>' . __FILE__;
    echo '<br>' . __DIR__;
    


?>