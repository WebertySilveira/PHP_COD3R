<div class="titulo">Interface</div>


<?php
    //Define métodos para as classes implementarem obrigatoriamente
    //exige a função, e a classe define
   
    
    //Interfaces e seus métodos são publicos por padrão
    interface Animal {
        function respirar();
    }
    interface Canino extends Animal{
        //Exige o retorno de uma String
        function latir(): string;
    }

    class Cachorro implements Canino{
        function respirar(){
            return "Oxigênio";
        }
        function latir(): string{
            return "Au Au!";
        }
    }
    $animal = new Cachorro();
    echo $animal->respirar() . "<br>";
    echo $animal->latir() . "<br>";

    var_dump($animal);
    echo "<br>";
    var_dump($animal instanceof Cachorro);
    echo "<br>";
    var_dump($animal instanceof Canino);
    echo "<br>";
    var_dump($animal instanceof Animal);
?>