<div class="titulo">Do While | While</div>

<?php

    $limite = 5;
    $contador = 10;

    do {
        echo "while $contador <br>";
        $contador++;
    } while ($contador < $limite);
  


    $limite = 10;
    $contador = 5;
    
    while ($contador < $limite) {
        echo "While $contador <br>";
        $contador++;
    }
?>