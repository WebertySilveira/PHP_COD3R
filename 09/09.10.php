<div class="titulo">Desafio Recursividade</div>



<?php

    $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];


    //Forma com Foreach
    foreach ($array as $valor) {
        if (is_array($valor)) {
            foreach ($valor as $valor) {
                if (is_array($valor)) {
                    foreach ($valor as $valor) {
                        echo ">>> $valor <br>";
                    }
                }else {
                    echo ">> " . $valor . '<br>';
                }
            }
        }else {
            echo "> $valor <br>";
        }
    }


    echo "<br><br><br>";


    //Usando Recursividade

    function recursividade($array, $nivel = '>'){
        foreach ($array as $value) {
            if (is_array($value)) {
                recursividade($value, $nivel . $nivel[0]);
            } else {
                echo "$nivel $value <br>";
            }
            
        }
    }

    echo recursividade($array);


    

?>