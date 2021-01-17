<div class="titulo">Argumentos e Retorno</div>

<?php

    function obterMensagem(){
        return "Seja bem vindo!";
    }
    
    $mensagem = obterMensagem();
    echo $mensagem . "<br>";
    var_dump(obterMensagem());

    echo "<br>";
    echo "<br>";




    function obterMensagemComNome($nome){
        return "Bem vindo, {$nome}!";
    }
    echo obterMensagemComNome('Tiago');

    echo "<br>";
    echo "<br>";





    function soma($a, $b){
        return $a + $b;
    }
    $x = 5;
    $y = 6;
    echo soma($x,$y);

    echo "<br>";
    echo "<br>";



    //Trocando por referência, 
    //assim muda mesmo e não cria cópia, nem precisa ser na global
    function trocarValor(&$a, $novoValor){
        $a = $novoValor;
    }

    $variavel = 1;
    trocarValor($variavel, 5);
    echo "$variavel";

?>