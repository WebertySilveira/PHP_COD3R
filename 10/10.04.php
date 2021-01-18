<div class="titulo">Herança</div>


<?php

    //Use parent::funcao(); Para herdar da classe pai

    class Pessoa{
        public $nome;
        public $idade;
    

        public function apresentar(){
            echo "{$this->nome}, {$this->idade},";
        }

        function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
            echo "<br> Pessoa Criada <br>";
        }
        function __destruct(){
            echo '<br> Pessoa Tchau! <br>';
        }
    }

    class Usuario extends Pessoa{
        public $login;

        public function apresentar(){
            parent::apresentar();
            echo "{$this->login}";
        }

        function __construct($nome, $idade, $login){
            // $this->nome = $nome;
            // $this->idade = $idade;
            parent::__construct($nome, $idade);
            $this->login = $login;
            echo "Usuário criado! <br>";
        }
        function __destruct(){
            parent::__destruct();
        }
    }

    $usuario = new Usuario("Weberty Silveira", 22, "Web_Silveira");
    $usuario->apresentar();

    unset($usuario);

?>