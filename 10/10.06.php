<div class="titulo">Membros estáticos</div>


<?php

    //Static, equivalente a um atributo constante dentro de uma classe

    class A{
        public $naoStatic = "Variável de Instância";
        public static $static = "Variável de classe (Estática)";

        public function mostrarA(){
            echo "Não Estática = {$this->naoStatic} <br>";

            //Não funciona pois o static não pertence a instância
            //Para ser chamado com o This
            //echo "Estática = {$this->static}";
            
            
            //Não funciona na interpolação
            //echo "Estática = {self::static}";

            //Forma correta
            echo "Estática = " . self::$static ."<br>";
        }

        public static function mostrarStatic(){
            //Dentro de uma função estática
            //Só é acessível membros estáticos
            echo "Estática = " . self::$static ."<br>";
        }
    }

    $Estatica = new A();
    $Estatica->mostrarA();

    //Acesse membros de classe, diretamente pela classe
    // $Estatica->mostrarStatic(); -> Forma incorreta
    //Não precisa de instância para ser executada
    A::mostrarStatic();
    echo A::$static;



?>