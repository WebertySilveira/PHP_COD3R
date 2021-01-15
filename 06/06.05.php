<div class="titulo">Desafio Operadores Lógicos</div>


<?php
    /**
     * Dois trabalhos -> Terça e quinta
     * Se os dois forem executados -> TV 50' e Sorvete
     * Se apenas um for executado -> TV 32' e Sorvete
     * Se nenhum for executado -> Fica em casa
     */
?>


<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>

    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>

    <button>Executar</button>
</form>




<?php
    $t1 =  $_POST['t1'];
    $t2 =  $_POST['t2'];

    if (($t1 == 1) && ($t2 == 1)) {
        echo "TV 50' e Sorvete";
    }

    if ( (($t1 == 1) && ($t2 == 0))  ||  (($t1 == 0) && ($t2 == 1)) ) {
        echo "TV 32' e Sorvete";
    }
    
    if (($t1 == 0) && ($t2 == 0)) {
        echo "Ficar em casa";
    }
?>