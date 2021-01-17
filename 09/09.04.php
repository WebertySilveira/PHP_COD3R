<div class="titulo">Argumentos variáveis</div>



<?php

    //Função com argumentos fixos
    function soma($a, $b){
        return $a + $b;
    }
    echo soma(1,2) . "<br>";



    //Com argumentos variáveis
    function somaVariavel(...$numeros){
        var_dump($numeros);
        echo "<br>";

        $soma = 0;

        foreach ($numeros as $key => $value) {
            $soma += $value;
        }

        return $soma;
    }
    echo somaVariavel(1,2,3,4,5) . '<br>';


    //Passando Array
    $array = [6,7,8];
    echo somaVariavel(...$array);


    //Assim fica variável a quantidade de dependentes
    //E fica os titulares
    function membros($titular, ...$dependentes){
        echo "Titular: $titular <br>";

        if ($dependentes) {
            foreach ($dependentes as $key => $dep) {
                echo "Dependentes: $dep <br>";
            }
        }
    }

    echo '<br>';
    echo '<br>';
    membros("Ana Silva", "Pedro", "Rafaela", "João");

    echo '<br>';
    echo '<br>';
    membros("Roberto");



?>