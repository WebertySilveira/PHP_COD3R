<div class="titulo">Desafio String</div>

<?php
    echo '<p>Retorne a quantidade de vezes que aparece "abc"
        na string "!AbcaBcabc":</p>';
        
    echo substr_count('!AbcaBcabc', 'abc');
?>