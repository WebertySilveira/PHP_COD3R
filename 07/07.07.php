<div class="titulo">Multidimensional e Constante</div>


<?php
    
     $dados = [
          [
               "nome" => "Roberto",
               "idade" => 26,
               "naturalidade" => "Bahia"
          ],
          [
               "nome" => "Maria",
               "idade" => 20,
               "naturalidade" => "Bahia"
          ],
     ];


     print_r($dados);
     echo '<br>' . $dados[0]["nome"];
     echo '<br>' . $dados[1]["nome"];

     unset($dados[1]);

     echo '<br>' . $dados[0]["idade"];
     //echo '<br>' . $dados[1]["nome"]; - DELETADO



     //Array Constante
     
     const FRUTAS = array('Laranja', 'Abacaxi');
     echo FRUTAS[0];

     // FRUTAS[0] = 'banana'; -> Não permite sobreescrever


?>