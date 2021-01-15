<div class="titulo">Mapa</div>


<?php
    
    $dados = array(
        "idade" => 22,
        "cor" => "verde",
        "peso" => 68
    );

    $lista = array(
        1 => 2,
        1,
        5 => 2,
        3 => 2,
        2 => 2,
    );

    //É armazenado no formato CHAVE -> VALOR

    print_r($dados);
    echo '<br>' . ($dados["idade"]);

    echo '<br>';
    
    $dados[] = 'i';
    print_r($dados);


    echo '<br>';
    print_r($lista);
?>