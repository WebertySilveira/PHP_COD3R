<div class="titulo">Desafio Switch</div>



<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">km > milha</option>
        <option value="milha-km">milha > km</option>
        <option value="metro-km">metro > km</option>
        <option value="km-metro">km > metro</option>
        <option value="fa-ce">FA > CE</option>
        <option value="ce-fa">CE > FA</option>
    </select>

    <button>Calcular</button>
</form>


<?php
    $distancia = $_POST['param'];
    $conversao = $_POST['conversao'];


    switch ($conversao) {
        case 'km-milha':
            echo $distancia * 0.62 . ' Milhas';  
            break;
        case 'milha-km':
            echo $distancia * 1.60 . ' Quilometros';           
            break;
        case 'metro-km':
            echo $distancia * 0.001 . ' Quilometros';           
            break;
        case 'km-metro':
            echo $distancia * 1000 . ' Metros';           
            break;
        case 'fa-ce':
            echo (($distancia - 32)/1.8) . ' Fahrenheit';           
            break;
        case 'ce-fa':
            echo (($distancia * 1.8) + 32) . ' Celsius';           
            break;
        default:
            echo "Adicione valores e converta";
            break;
    }

?>