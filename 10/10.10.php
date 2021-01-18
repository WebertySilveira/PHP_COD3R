<div class="titulo">Modificador Final</div>


<?php

    //Não permite que seja herdada nem sobreescrita
    
    abstract class Abstrata {
        abstract public function metodo1();

        public final function metodo2(){
            echo "Não muda <br>";
        }
    }


    class Classe extends Abstrata{
        public function metodo1(){
            echo "Executando M1 <br>";
        }

        //Não permite por ser um final method
        // public function metodo2(){
        //     echo "Executando M2 <br>";
        // }
    }

    $classe = new Classe();
    $classe->metodo1();
    $classe->metodo2();



    //Pode ser instanciada
    final class Unica{
        public $atr = 'Valor';
    }
    $unica = new Unica();
    echo $unica->atr;
?>