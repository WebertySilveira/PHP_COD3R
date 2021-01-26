<?php

    require_once '11.06.01.php';

    class Usuario extends Pessoa{
        public $login;

        public function apresentar(){
            parent::apresentar();
            echo $this->login;
        }

        function __construct($nome, $idade, $login){
            parent::__construct($nome, $idade);
            $this->login = $login;

            echo "Usuario Criado!<br>";
        }

        function __destruct(){
            parent::__destruct();
        }
    }


?>