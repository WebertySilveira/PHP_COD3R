<div class="titulo">Variáveis variáveis</div>


<?php
    
    $a = 'valorA';
    $$a = 'valorAA';
    echo "$a {$$a} ${$a} $valorA";

    echo '<br>';

    $epa = 'opa';
    $opa = 'vish';
    $vish = 'Eita';

    echo "$epa {$$epa} {$$$epa}";
?>