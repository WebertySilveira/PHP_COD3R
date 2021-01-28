<div class="titulo">Try | Catch</div>


<?php 
    
    try {
        echo intdiv(7, 0);
    } catch (Error $e) {
        echo "Ocorreu um erro <br>";
    }

    try{
        throw new Exception("Um erro aconteceu <br>");
        echo intdiv(7,0);
    } catch(DivisionByZeroError $e){
        echo "Divisão por zero<br>";
    } catch(Throwable $e){
        echo "Erro encontrado: " . $e->getMessage();
    } finally {
        echo "Sempre executado";
    }

    

?>
