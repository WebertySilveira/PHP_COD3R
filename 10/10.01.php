<div class="titulo">Primeira Classe</div>


<?php

    class Cliente{
        //Atributos publicos
        public $nome = 'Anônimo';
        public $idade = 18;

        public function apresentar(){
            //Usando o This para apontar para o objeto atual
            //Usando -> para acessar um membro da classe
            echo "Nome: {$this->nome} <br>";
            echo "Idade: {$this->idade} <br>";
        }
    }

    //Construindo o objeto
    $cliente1 = new Cliente();
    //Alterando o valor nome para o objeto $cliente1
    $cliente1->nome = 'Ana Silva';
    $cliente1->idade = 27;
    //Chamando o método apresentar
    $cliente1->apresentar();


    //Construindo o objeto
    $cliente2 = new Cliente();
    //Alterando o valor nome para o objeto $cliente2
    $cliente2->nome = 'Gabriel';
    $cliente2->idade = 50;
    //Chamando o método apresentar
    $cliente2->apresentar();

?>