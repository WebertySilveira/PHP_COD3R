<div class="titulo">Map | Filter</div>



<?php

    $notas = [5.8, 7.3, 9.8, 6.7];

    //Usando MAP
    $notasFinais = array_map(round(), $notas);
    print_r($notasFinais);


    //Filtrando aprovados
    function aprovados($nota){
        return $nota >= 7;
    }
    
    $aprovados = array_filter($notas, aprovados);
    print_r($aprovados);

?>