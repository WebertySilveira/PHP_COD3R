<div class="titulo">Desafio Array</div>


<?php
    
    echo "Descubra o que será impresso, sem executar" . '<br>';

    echo "
        Array( 
            [0] => 8,
            [3] => 3,
            [4] => 2,
            ['a'] => 4,
            [06] => 7,
            [9] => 6
        );
    ";


    echo '<br>';

    $lista = array(
        1,
        4 => 2,
        3 => 3,
        'a' => 4,
        5,
        '9' => 6,
        '06' => 7,
        0 => 8
    );
    print_r($lista);
?>