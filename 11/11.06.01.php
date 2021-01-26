<?php

    class Pessoa{
        public $nome;
        public $idade;

        function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
            echo 'Pessoa Criada!<br>';
        }

        public function apresentar(){
            echo "Olá $this->nome, $this->idade anos, ";
        }

        function __destruct(){
            echo '<br>Pessoa Destruída!<br>';
        }
    }

?>