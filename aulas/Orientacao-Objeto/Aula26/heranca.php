<?php
    //Classe base
    class Animal{
        public $nome;
        public function emitirSom(){
            echo "Som do Animal.";
        }
    }

    //Classe derivada
    $dog = new dog();
    $dog -> nome = "Billy";
    $dog -> porte = "grande";
    $dog -> emitirSom(); //Saída: Som do Animal.
    $dog -> latir();//Saída: Au Au!
    
    print_r($dog);

    class dog extends Animal{
        public $porte;
        public function latir(){
            echo "\nAu Au!";
        }
    }




    $gato = new Gato();
    $gato -> nome = "Tom";
    $gato -> emitirSom();
    $gato -> miar();
    print_r($gato);

    class Gato extends Animal{
        public function miar(){
            echo "\nMiauu!";
        }
    }

   


   

?>