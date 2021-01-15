<div class="titulo">Desafio Equação</div>


<?php
    $numerador1 = ((6 * (3+2)) ** 2)/6;
    $numerador2 = (((1 - 5) * (2 - 7))/2) ** 2;
    
    $numeradorT = ($numerador1 - $numerador2) ** 3;
    $denominadorT = 10 ** 3;

    $resultado = $numeradorT / $denominadorT;
    echo 'Resultado final: ' . $resultado;
?>