<div class="titulo">Operações</div>


<?php
    
    $dados1 = [
        "nome" => "Jose",
        "idade" => 28
    ];

    $dados2 = [
        "naturalidade" => "Fortaleza"
    ];
    $dados2["endereço"] = "Rua A";

    //Junta os dados
    $dadosCompletos = $dados1 + $dados2;
    print_r($dadosCompletos);

    //Boolean array
    echo '<br>' . is_array($dadosCompletos);
    
    //Conta quantos dados
    echo '<br>' . count($dadosCompletos);


    //Valor Aleatório
    echo '<br>';
    $indice = array_rand($dadosCompletos);
    echo "$indice = $dadosCompletos[$indice]";


    //Remover dado
    echo '<br>';
    unset($dadosCompletos["nome"]);
    print_r($dadosCompletos);
    

    echo '<br>';
    $impares = [1,3,5,7,9];
    $pares = [0,2,4,6];
    $decimais = $pares + $impares;
    print_r($decimais);


    //Forma certa de unir todos os numeros
    echo '<br>';
    $decimais = array_merge($pares, $impares);
    print_r($decimais);
    
    
    //Ordena os números do array
    echo '<br>';
    sort($decimais);
    print_r($decimais);

?>