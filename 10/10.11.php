<div class="titulo">Traits</div>


<?php

    //Pode reutilizar o código sem ser por herança

    trait validacao{
        public function validar($str){
            return isset($str) && $str !== '';
        }
    }

    trait validacaoMelhor{
        //Quando as duas funções tiverem o mesmo nome
        public function validar($str){
            return isset($str) && trim($str);
        }
    }

    class Usuario{
        //Use a chave e selecione qual usar
        use validacao, validacaoMelhor{
            validacaoMelhor::validar insteadOf validacao;


            //Caso ainda queira a primeira, usa o Alias
            validacao::validar as vSimples;
        }
    }

    $usuario = new Usuario();
    var_dump($usuario->validar(' '));
    var_dump($usuario->vSimples(' '));


    echo "<br>";
    echo "<br>";
    echo "<br>";

?>