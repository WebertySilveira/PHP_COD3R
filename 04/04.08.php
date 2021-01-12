<div class="titulo">Conversões</div>

<?php
    echo is_int(PHP_INT_MAX);
    echo '<br>';
    
    var_dump(PHP_INT_MAX + 1);
    echo '<br>';
    var_dump(1 + 1.0);
    echo '<br>';
    var_dump((float) 3);
    echo '<br>';
    


    var_dump((int) 6.8);
    echo '<br>';
    var_dump((int) round(2.8));
    echo '<br>';
    var_dump(intval(2.999));
    echo '<br>';


    var_dump(3 + "2");
    echo '<br>';

    

?>