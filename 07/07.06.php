<div class="titulo">Desafio Sorteio</div>


<?php
    
   $nomes = [
        "Weberty",
        "Bruno",
        "Vitória",
        "Rafael",
        "Diego",
        "Valéria",
   ];
    
   $nomesR = array_rand($nomes);
   echo("<h1 
        style='display:flex;
        justify-content:center;'>" 
            .$nomes[$nomesR].
        "</h1>");

?>