<div class="titulo">Classe Abstrata</div>


<?php

     /**
     * Classe Concreta -> Implementa todos os métodos;
     * Interface -> Não implementa nenhum;
     * Abstrata -> Mistura todos;
     */
    


    //Classe abstrata não pode ser instanciada
    //É pra ser herdada

    abstract class Abstrata{
        abstract public function metodo1();
        abstract protected function metodo2($parametro);
    }

    abstract class FilhaAbstrata extends Abstrata {
        public function metodo1(){
            echo "Executando m1 <br>";
        }

        abstract public function metodo3();
    }

    class Concreta extends FilhaAbstrata{
        public function metodo1(){
            echo "Executando m1 extendido <br>";
            parent::metodo1();
        }

        protected function metodo2($parametro){
            echo "Executando m2 extendido <br>";
        }

        public function metodo3(){
            echo "Executando m3 extendido <br>";
            $this->metodo2('Interno');
        }
    }

    $c = new Concreta();
    $c->metodo1();
    // $c->metodo2('externo');
    $c->metodo3();
?>