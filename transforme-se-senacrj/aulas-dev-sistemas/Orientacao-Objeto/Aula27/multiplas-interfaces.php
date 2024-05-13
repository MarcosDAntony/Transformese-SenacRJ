<?php
/* Exercício 1 - Polimorfismo

Crie uma classe Forma com um metódo calcularArea().
Implemente essa classe nas classes Circulo e Quadrado 
*/

/**Interface */
interface Objeto_colorido{
    public function getCor();
}

interface Diametro{
    const PI = 3.14;
    public function calcularDiametro();
}

class Forma{
    public function calcularArea(){
        echo "Calcula a área da forma\n";
    }
}




class bolinho_de_feijoada extends Forma implements Objeto_colorido{
    private $raio;
    public function __construct($raio){
        //Raio em cm
        $this -> raio = $raio;
    }
    public function getCor(){
        return "verde";
    }
    public function calcularArea(){
        return pi() * $this -> raio * $this -> raio;
    }
}




class bola_do_kiko_quadrada extends Forma{
    private $lado;
    public function __construct($lado){
        // Lado em cm
        $this -> lado = $lado;
    }
} 

$circulo = new bolinho_de_feijoada(5);
$quadrado = new bola_do_kiko_quadrada(10);


echo "Área do Bolinho de feijoada: ". round($circulo->calcularArea(),4). "\n";
echo "Área da Bola quadrada do Kiko: ". $quadrado->calcularArea();
?>
