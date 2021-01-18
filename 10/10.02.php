<div class="titulo">Desafio Data</div>


<?php

    /**Classe  - data
     * 
     * Atributos - dia/mês/ano
     * padrão dia - 01
     * padrão mês - Janeiro
     * padrão ano - 1970
     * 
     * Método apresentar - Dia/Mês/Ano
     */


     class Data{
         public $dia = '01';
         public $mes = 'Janeiro';
         public $ano = '1970';

         public function apresentar(){
             return "{$this->dia}/{$this->mes}/{$this->ano}";
         }
     }


     $data = new Data();
     $data->dia = '02';
     $data->mes = 'Fevereiro';
     $data->ano = '2014';
     echo $data->apresentar() . '<br><br>';

     $data2 = new Data();
     echo $data2->apresentar();

?>