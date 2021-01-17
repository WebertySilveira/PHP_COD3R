<div class="titulo">Argumento Padrão</div>



<?php

    function saudacao($nome = 'Senhor', $sobrenome = 'Cliente'){
        return "Bem vindo, $nome $sobrenome<br>";
    }

    echo saudacao();
    echo saudacao(Null);
    echo saudacao(null, null);
    echo saudacao('Mestre', 'Supremo');


    function anotarPedido($comida, $bebida = 'Agua'){
        echo "Para comer: $comida <br>";
        echo "Para beber: $bebida <br>";
    }

    anotarPedido("hamburguer");
    anotarPedido("Pizza", "Refrigerante");

?>