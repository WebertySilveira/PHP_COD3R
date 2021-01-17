<div class="titulo">Desafio Impressão</div>

<?php

    /**
     * Imprima apenas os valores do array que contém índice par
     * Resolver com for e foreach
     * Valores Esperados: AAA, CCC, EEE
     */

     $array = [
         "AAA",
         "BBB",
         "CCC",
         "DDD",
         "EEE",
         "FFF",
     ];

     for ($i=0; $i < count($array); $i++) { 
         if ($i % 2 == 0) {
             echo "$array[$i]" . "<br>";
         }
     }

     echo"<br>";

     foreach ($array as $chave => $a) {
         if ($chave % 2 == 0) {
             echo $a . "<br>";
         }
     }

?>