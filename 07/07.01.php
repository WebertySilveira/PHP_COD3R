<div class="titulo">Arrays</div>


<?php
    $lista = array(1, 2, 3.4, "texto");
    var_dump($lista);
    echo '<br>';

    print_r($lista);
    echo '<br>';

    echo $lista[0] . '<br>';
    echo $lista[1] . '<br>';
    echo $lista[2] . '<br>';
    echo $lista[3] . '<br>';

    echo '<br>';
    echo '<br>';

    $texto = 'Texto de teste';

    echo $texto[0] . '<br>';
    echo '<br>' . mb_substr($texto, 9, 5);
?>