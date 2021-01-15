<div class="titulo">Variáveis</div>


<?php

    $numeroA = 13;
    echo $numeroA, '<br>';
    var_dump($numeroA);

    echo '<br>';
    $a = 3;
    $b = 16;
    $somaDosNumeros = $a + $b;
    echo $somaDosNumeros;
    echo '<br>';
    var_dump($somaDosNumeros);


    echo '<br>';
    echo isset($somaDosNumeros);
    echo '<br>';


    
    echo '<p>Unset</p>';
    unset($somaDosNumeros);
    var_dump($somaDosNumeros);



    $variavel = 10;
    echo '<br>' . $variavel;
    $variavel = "Agora sou uma string";
    echo '<br>' . $variavel;
    echo '<br>';

    echo '--------------------------------------';

    //Nomes das variáveis
    $var = 'valida';
    $var2 = 'valida';
    $VAR3 = 'valida';
    $VaR4 = 'Ñ Recomendado';
    $_var_4 = 'valida';
    $vâr5 = 'Ñ Recomendado';
    
    //$6var = 'Inválido';
    //$%var7 = 'Inválido';
    //$var8% = 'Inválido';
    
    echo '<br>';
    var_dump($_SERVER);

?>