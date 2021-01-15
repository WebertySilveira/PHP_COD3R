<div class="titulo">IF/ELSE</div>


<?php

    if (true) 
        echo "Sentença Única";

    if (true) {
        echo "<br>Mais de uma";
        echo " | Mais de uma";
    }
    
    if (false); {
        echo "<br> O bloco de código está separado do If";
    }

    if ("") { //0
        echo "String vazia retorna falso";
    }
    if (" ") { //0.001
        echo "<br>String retorna verdadeiro";
    }




    
    if (true) {
        echo "<br>Verdadeiro";
    } else {
        echo "Falso";
    }
    

    if (false) {
        echo "A";
    } else if(true){
        echo "<br>B"; 
    } else {
        echo "C";
    }
    


?>