<div class="titulo">Desafio Palindromo</div>


<form action="#" method="post">
    <input type="text" name="palavra" placeholder="Digite uma palavra" required>
    <button>Verificar</button>
</form>


<?php

    if (isset($_POST['palavra'])) {
        $palavra = $_POST['palavra'];
    }else {
        $palavra = 'arara';
    }

    $palavra = strtoupper($palavra);
        
    

    function palindromoStr($palavra){
        if ($palavra === strrev($palavra)) {
            return "$palavra é Palindromo;";
        } else {
            return "$palavra não é Palindromo";
        }
    }

    echo "<h3>Usando STRREV</h3> <br>";

    echo palindromoStr($palavra);





    echo "<br>";
    echo "<br>";
    echo "<br>";





    function palindromoFor($palavra, $palavra2){
        for ($i = strlen($palavra) - 1; $i >= 0; $i--) { 
            $palavra2 = $palavra2 . $palavra[$i];
        }

        if ($palavra == $palavra2) {
            return "$palavra é Palindromo;";
        }else {
            return "$palavra não é Palindromo;";
        }
    }
    $palavra2 = '';

    echo "<h3>Usando for</h3> <br>";

    echo palindromoFor($palavra, $palavra2);

?>