<div class="titulo">Desafio Tabela #2</div>

<form action="#" method="post">
    <input type="number"
           name="linha"
           placeholder="Linhas"
           value = <?php echo $_POST['linha'] ?? 5 ?>>

    <input type="number"
           name="coluna" 
           placeholder="Colunas"
           value = <?php echo $_POST['colunas'] ?? 5 ?>>

    <button>Gerar Tabela</button>
</form>


<?php

    if (isset($_POST['linha'])) {
        $linhas = $_POST['linha'];
    } else {
        $linhas = 5;
    }

    if (isset($_POST['coluna'])) {
        $colunas = $_POST['coluna'];
    } else {
        $colunas = 5;
    }

    

    $num = 1;
        
        echo "<table>";
            for ($i=0; $i < intval($linhas); $i++) { 
                echo "<tr>";
                
                for ($e=0; $e < intval($colunas); $e++) { 
                    echo "<td>";
                        echo "$num";
                        $num++;
                    echo "</td>";
                }
                echo "</tr>";
            }
        echo "</table>";

?>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 50px;
    }

    table tr {
        border: 1px solid #444;
    }

</style>