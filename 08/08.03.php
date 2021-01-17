<div class="titulo">Foreach</div>

<?php

    $array = [
        10 => "Domingo", //Desconsidera a ordem da chave
        "Segunda",
        "Terça",
        "Quarta",
        "Quinta",
        "Sexta",
        "Sábado"
    ];
    foreach ($array as $value) {
        echo "$value" . '<br>';
    }

    echo "<br>";

    foreach ($array as $index => $value) {
        echo "$index => $value" . '<br>';
    }
    
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $matriz = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b', 'c', 'd']
    ];

    //Percorre a matriz[][], percorre a linha[] e imprime, duas voltas
    foreach ($matriz as $linha) {
        foreach ($linha as $value) {
            echo "$value";
        }
    }



    echo "<br>";
    echo "<br>";
    echo "<br>";


    //Por referência

    $numeros = [1,2,3,4,5];
    foreach ($numeros as &$dobrar) {
        $dobrar *= 2;
        echo "$dobrar<br>";
    }
    print_r($numeros);
?>