<div class="titulo">Desafio For</div>

<?php

    /**
     * #
     * ##
     * ###
     * ####
     * ##### 
     * 
     * 1 - Pode usar incremento $i++
     * 2 - Não Pode usar incremento $i++
     * */    

     $arr = [
         "#",
         "##",
         "###",
         "####",
         "#####",
     ];

     $arr2 = [
        5 => "#",
        4 => "##",
        3 => "###",
        2 => "####",
        1 => "#####"
    ];

     for ($i=0; $i < 5; $i++) { 
         echo "$arr[$i]<br>";
     }

     echo '<br>';
     echo '<br>';
     echo '<br>';
     echo '<br>';

     for ($e=5; $e != 0; $e--) { 
        echo "$arr2[$e]<br>";
     }
?>