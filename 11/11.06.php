<div class="titulo">Desafio Require OO</div>


<?php

    require_once '11.06.02.php';

    $pessoa = new Pessoa('Weberty', 32);
    $pessoa->apresentar();
    unset($pessoa);
    echo "<hr>";

    $usuario = new Usuario('Weberty', 32, "Web_silveira");
    $usuario->apresentar();
    unset($usuario);

?>