<div class="titulo">Operadores Lógicos</div>


<?php

    echo "<p>V ou F</p><hr>";


    $idade = 62;
    $sexo = 'F';
    $previdencia = true;

    $criterioH = ($idade >= 65 && $sexo === 'M');
    $criterioM = ($idade >= 60 && $sexo === 'F');
    $atingiu = $criterioH || $criterioM;
    $pode = $previdencia && $atingiu;
    echo "Pode aposentar -> $pode<br>";


    
    if ($idade >= 60 && $sexo === 'F') {
        echo "Pode se aposentar -> $sexo";
    }elseif ($idade >= 65 && $sexo === 'M') {
        echo "Pode se aposentar";
    }else {
        echo "Não pode";
    }






    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';

    var_dump(true);
    echo '<br>';
    
    var_dump(!true);
    echo '<br>';


    var_dump(true && true);
    echo '<br>';
    var_dump(true && false);
    echo '<br>';

    var_dump(false && true);
    echo '<br>';
    var_dump(false && false);
    echo '<br>';



    var_dump(true and true);
    echo '<br>';
    var_dump(true and false);
    echo '<br>';

    var_dump(false and true);
    echo '<br>';
    var_dump(false and false);
    echo '<br>';


    var_dump(true || true);
    echo '<br>';
    var_dump(true || false);
    echo '<br>';

    var_dump(false || true);
    echo '<br>';
    var_dump(false || false);
    echo '<br>';



    var_dump(true or true);
    echo '<br>';
    var_dump(true or false);
    echo '<br>';

    var_dump(false or true);
    echo '<br>';
    var_dump(false or false);
    echo '<br>';



    var_dump(true xor true);
    echo '<br>';
    var_dump(true xor false);
    echo '<br>';

    var_dump(false xor true);
    echo '<br>';
    var_dump(false xor false);
    echo '<br>';



    var_dump(true != true);
    echo '<br>';
    var_dump(true != false);
    echo '<br>';

    var_dump(false != true);
    echo '<br>';
    var_dump(false != false);
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';



?>