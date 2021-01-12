<div class="titulo">Strings</div>

<?php
    echo 'Eu sou uma string';
    echo '<br>';

    var_dump("Eu também");
    echo '<br>';

    //Concatenação
    echo "Nós também" . " somos";
    echo '<br>';

    echo " 'Teste' " . ' "Teste" ' . ' \'Teste\' ' . "\\";

    print("<br> Também existe a função print");


    //Funções
    echo '<br>' .strtoupper('maximizado');
    echo '<br>' .strtolower('MINIMIZADO');
    echo '<br>' .ucfirst('primeira');
    echo '<br>' .ucwords('todas as palavras');
    echo '<br>' .strlen('Quantas letras');
    echo '<br>' .strlen('ÁÁ');
    echo '<br>' .mb_strlen('ÁÁ');
    echo '<br>' .substr('Só uma parte', 7, 6);
    echo '<br>' .str_replace('isso', 'aquilo', 'Trocar por isso isso');

?>