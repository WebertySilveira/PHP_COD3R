<div class="titulo">Recursividade</div>



<?php
    $n = 5;
    $resultado = 0;

    for ($i=$n; $i >= 1; $i--) { 
        $resultado += $i;
        
    }
    echo $resultado . '<br><br>';

    
    
    //Função recursiva, chama ela mesma até a condição de parada

    function somaRecursivaAteUm($numero){
        if ($numero === 1) {
            return 1;
        }

        return $numero + somaRecursivaAteUm($numero - 1);
    }

    echo somaRecursivaAteUm(5) . '<br>';



    //Função recursiva ternária

    function somaEconomica($numero){
        return $numero === 1 ? 1 : $numero + somaEconomica($numero - 1);
    }
    
    echo somaEconomica(5);


?>