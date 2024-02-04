<?php
/** 1. Crie uma classe 'Veículos' com propriedades como 'marca' e 'modelo'
 * em seguida, crie classes específicas ('Carro', 'Moto') que herdem da 
 * classe 'Veículos'.
 */

 //Classe base
 class Veiculos{
     public $marca;
     public $modelo;
     public function ignicao(){
         echo "Ligado";
     }
 }

 //Classe derivada
 class car extends Veiculos{
    public function ignicao(){
       echo "Vrumm vrummm!";
    }
}
 $carro = new car();
 $carro -> marca = "Jeep";
 $carro -> modelo = "2024"; 
 $carro -> ignicao();
 print_r($carro);





 class moto extends Veiculos{
    public function ignicao(){
        echo "\nDARANRANARNAN";
    }
}
 $moto = new moto();
 $moto -> marca ="X1";
 $moto -> modelo ="2004";
 $moto -> ignicao();
print_r($moto);


?>