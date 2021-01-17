<div class="titulo">Função anônima</div>



<?php

    $soma = function($a, $b){
        return $a + $b;
    };
    $multiplicacao = function($a, $b){
        return $a * $b;
    };


    function executar($a, $b, $op, $funcao){
        $resultado = $funcao($a, $b);
        echo "$a $op $b = $resultado<br>";
    }

    executar(2,3, '+', $soma);
    executar(2,3, '*', $multiplicacao);

?>