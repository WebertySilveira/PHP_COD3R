<?php
    //Namespace sempre tem que ser a primeira coisa no bloco
    namespace contexto;
?>

<div class="titulo">Introdução</div>


<?php 
    echo __NAMESPACE__ . '<br>';

    const CONSTANTE1 = 123;

    //Usando DEFINE precisa por o namespace \ Constante
    define(__NAMESPACE__ . '\CONSTANTE2', 456);

    echo CONSTANTE1 . '<br>';
    echo CONSTANTE2 . '<br>';



?>
