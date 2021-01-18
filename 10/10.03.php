<div class="titulo">Construtor | Destrutor</div>


<?php

    class Pessoa{
        public $nome;
        public $idade;

        public function apresentar(){
            echo "{$this->nome}/{$this->idade}<br>";
        }

        //Define os parâmetros para criação do objeto
        //Deixando o valor padrão na idade
        //Fica opcional na chamada
        function __construct($nome, $idade = 18){
            echo "Construtor <br>";
            $this->nome = $nome;
            $this->idade = $idade;
        }

        function __destruct(){
            echo "E Morreu";
        }
    }

    //É necessário agora passar os parâmetros
    //para o construtor
    $pessoa = new Pessoa("Nome", 22);
    $pessoa->apresentar();

    //Chamando destrutor uma das formas
    $pessoa = null;
    unset($pessoa);
?>