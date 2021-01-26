<div class="titulo">Include vs Require</div>


<?php

    echo "Usando include com arquivo inexistente... <br>";
    include "arquivo_inexistente.php";
    //Continua executando o restante da aplicação
    echo "<br> Usando include com arquivo inexistente...<br><br>";

    echo "<hr>";

    echo "Usando require com arquivo inexistente... <br>";
    require "arquivo_inexistente.php";
    //Causa erro fatal e não executa o resto do código
    echo "<br> Usando require com arquivo inexistente...";

?>