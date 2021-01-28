<?php namespace Desafio; ?>

<div class="titulo">Desafio IntDiv</div>
<form action="#" method="post">
    <input type="text" name="n1">
    <input type="text" name="n2">
    <button>Checar</button>
    <br><br>
</form>


<?php 

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    function intdiv($n1, $n2){
       if ($n2 == 0) {
           throw new \Exception("Não é possível dividir por zero<br>");
       } elseif (!is_int($n1/$n2)) {
           throw new \Exception("Não é um resultado inteiro<br>");
       } else {
           return $n1/$n2;
       }
    }


    try {
        echo intdiv($n1,$n2);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }

?>
