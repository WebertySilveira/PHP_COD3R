<div class="titulo">Valor vs Referência</div>


<?php

    /** Valor
     * É armazenado em um local da memoria
     * Quando atribuído é alocado em outro espaço
     * Criando uma cópia do valor inicial
     * Mas evoluindo independentemente do mesmo
     * 
     * Referência
     * É armazendo em um local da memoria
     * Quando atribuído referencia o mesmo local
     * Não cria uma cópia e sim usa o mesmo
     * E a evolução é compartilhada
     * Pois é o mesmo valor
     */
    

     $variavel = 'valor inicial';
     echo $variavel;

     
     //VALOR
     $variavelValor = $variavel;
     echo "<br> $variavelValor"; 

     $variavelValor = 'novo valor';
     echo "<br> $variavel";
     echo "<br> $variavelValor";


     
    //REFERÊNCIA
    echo '<br>' . '---------------------------';
    $variavelReferencia = &$variavel;
    $variavelReferencia = "mesma referencia";
    echo "<br>$variavel";
    echo "<br>$variavelReferencia";


?>