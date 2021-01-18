<div class="titulo">Visibilidade</div>


<?php

    class A {
        public $publico = "Público";
        protected $protegido = "Protegido";
        private $private = "Private";

        public function mostraA(){
            $this->naoMostra(); //Função private pode ser chamada por outra função na mesma classe
            echo "Publico = {$this->publico} <br>";
            echo "Protegido = {$this->protegido} <br>";
            echo "Private = {$this->private} <br>";
        }

        protected function vaiPorHeranca(){
            echo "Por herança! <br>";
        }

        private function naoMostra(){
            echo "Não imprime <br>";
        }
    }

    $a = new A();
    $a->mostraA();

    //Apenas o público funciona:
    // echo $a->publico;
    // echo $a->protected;
    // echo $a->private;


    echo "<br>";


    class B extends A{
        public function mostraB(){
            echo "Publico = {$this->publico} <br>";
            echo "Protegido = {$this->protegido} <br>";
            //Private gera erro

            parent::vaiPorHeranca();
        }
    }

    $b = new B();
    $b->mostraB();


    //Só pode ser usada dentro da classe que recebeu por herança
    //$b->vaiPorHeranca();

?>