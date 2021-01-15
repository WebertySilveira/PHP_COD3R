<div class="titulo">GET | POST</div>


<?php
    
    print_r($_GET);
    echo "<br> {$_GET['dir']}";

    echo '<br>';
    echo '<br>';
    echo '<br>';
     
?>





<form action="#" method="post">
     <input type="text" name="nome">
     <input type="text" name="sobrenome">
     <select name="estado">
          <option value="AC">ACRE</option>
          <option value="BA">BA</option>
     </select>
     <button>Enviar</button>
</form>

<?php
     print_r($_POST);
     echo '<br>' . count($_POST);

     echo '<br>';
     echo '<br>';
     echo '<br>';
?>




<?php
     $arr1 = ['nome' => 'Maria', 'idade' => 20];
     $arr2 = ['nome' => 'Maria', 'idade' => 20];

     var_dump($arr1 == $arr2);
     var_dump($arr1 === $arr2);

     $arr3 = ['idade' => 20, 'nome' => 'Maria'];
     echo '<br>';

     var_dump($arr1 == $arr3);
     var_dump($arr1 === $arr3);
     var_dump($arr1 != $arr3);
     var_dump($arr1 !== $arr3);


?>