<div class="titulo">Função e Escopo</div>

<?php

    function imprimirMensagens(){
        echo "Função ";
        echo "Imprimindo Mensagens! <br>";
    }

    imprimirMensagens();
    imprimirMensagens();


    $variavel = 1;

    function trocaValor(){
        $variavel = 2;
        echo "<br>Durante a função: $variavel <br>";
    }

    echo "<br>Antes: $variavel";
    trocaValor();
    echo "Depois: $variavel <br>";



    function trocaValorMesmo(){
        //Referencia a variável de fora
        global $variavel;
        $variavel = 2;
        echo "<br>Durante a função: $variavel <br>";
    }

    echo "<br>Antes: $variavel";
    trocaValorMesmo();
    echo "Depois: $variavel <br>";

    //Não tem retorno ainda
    var_dump(trocaValorMesmo());

?>