<div class="titulo">Closure e Callable</div>



<?php

    //Função normal e anônima são Callable
    //Só a anônima é uma Closure

    $soma = function($a, $b){
        return $a + $b;
    };

    echo $soma(2,3);
    echo (is_callable($soma) ? ' Sim' : ' Não') . '<br><br>';

    var_dump($soma);

?>