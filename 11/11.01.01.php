<?php

    echo "Carregando: 11.01.01<br>";

    $variavel = "Definida";

    //Impede de criar duas vezes a mesma função, gerando erro
    if (!function_exists('soma')) {
        function soma($a, $b){
            return $a + $b;
        }
    }
    

?>