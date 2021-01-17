<div class="titulo">For</div>

<?php

    for ($i=1; $i <= 5; $i++) { 
        echo $i . " ";
    }

    echo "<br>";

    for (; $i <= 10; $i++) { 
        echo $i . " ";
    }

    echo "<br>";

    for (; $i <= 15;) { 
        echo $i . " ";
        $i++;
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $array = [
        "Domingo",
        "Segunda",
        "Terça",
        "Quarta",
        "Quinta",
        "Sexta",
        "Sábado"
    ];

    for ($i=1; $i < count($array) ; $i++) { 
        echo $array[$i] . '<br>';
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $matriz = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b', 'c', 'd']
    ];

    for ($i=0; $i <= count($matriz); $i++) { 
        for ($e=0; $e < count($matriz[$i]); $e++) { 
            echo"{$matriz[$i][$e]}";
        }
    }

    
    

?>