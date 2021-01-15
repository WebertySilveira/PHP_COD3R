<div class="titulo">Operadores Relacionais</div>


<?php

    var_dump(1 == 1);
    echo '<br>';

    var_dump(1 > 1);
    echo '<br>';

    var_dump(1 >= 1);
    echo '<br>';

    var_dump(1 < 1);
    echo '<br>';

    var_dump(1 <= 1);
    echo '<br>';

    var_dump(1 != 1);
    echo '<br>';

    var_dump(1 <> 1);
    echo '<br>';






    var_dump(111 == '111');
    echo '<br>';

    var_dump(111 === '111');
    echo '<br>';

    var_dump(111 != '111');
    echo '<br>';

    var_dump(111 !== '111');
    echo '<br>';
    echo '<br>';
    echo '<br>';



    echo "<p style='margin-bottom:0;'>Relacionais no IF/ELSE</p> <hr style='margin-top:0'>";
    $idade = 22;
    if ($idade < 18) {
        echo "Menor de idade: $idade anos <br>";
    } else if ($idade <= 65) {
        echo "Adulto: $idade anos <br>";
    }else{
        echo "Terceira idade: $idade anos <br>";
    }


    echo '<br>';
    echo '<br>';
    echo '<br>';

    echo 'Spaceship <br>';
    var_dump(500 <=> 3);    
    var_dump(50 <=> 50);    
    var_dump(5 <=> 50);    

    echo '<br>';
    echo '<br>';


    echo 'Valores podem ser V ou F, use var_dump(!!$num) <br>';
    var_dump(!!5);
?>