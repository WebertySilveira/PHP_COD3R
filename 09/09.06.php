<div class="titulo">Declarando tipos</div>



<?php

    function somar(int $a, int $b){
        return $a + $b;
    }

    echo somar(1,2) . '<br>';
    //Arredonda
    echo somar(1.7,2.2) . '<br> <br>';



    function somar2($a, $b): int{
        echo $a . $b . '<br>';
        return $a + $b;
    }

    echo somar2(1,2) . '<br>';
    //Arredonda
    echo somar2(1.7,'2.2');

?>