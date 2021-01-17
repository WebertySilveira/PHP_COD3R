<div class="titulo">Desafio Tabela #1</div>

<?php

    $matriz = [
        ['01', '02', '03', '04', '05'],
        ['06', '07', '08', '09', '10'],
        ['11', '12', '13', '14', '15'],
        ['16', '17', '18', '19', '20'],
    ];

    //Primeira tabela
    echo "<table>";

        foreach ($matriz as $key => $value) {
            
            echo "<tr>";
                foreach ($value as $key => $val) {
                    echo "<th>$val</th>";
                }
            echo "</tr>";

            echo "<br>";
        }

    echo "</table>";


    //Segunda tabela
    echo "<table>";

        foreach ($matriz as $key => $value) {

            if ($key % 2 == 0) {
                echo "<tr>";
                foreach ($value as $key => $val) {
                    echo "<th>$val</th>";
                }
                echo "</tr>";
            } else {
                echo "<tr style='background-color:gray'>";
                foreach ($value as $key => $val) {
                    echo "<th>$val</th>";
                }
                echo "</tr>";
            }
        

            echo "<br>";
        }

    echo "</table>";


?>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
    }

    table tr {
        border: 1px solid #444;
    }

</style>