<?php
interface Forma {
    public function calcularArea();
}

interface ObjetoComCor {
    public function getCor();
}

class Quadrado implements Forma, ObjetoComCor {
    private $lado;
    private $cor;

    public function __construct($lado, $cor) {
        $this->lado = $lado;
        $this->cor = $cor;
    }

    public function calcularArea() {
        return $this->lado * $this->lado;
    }

    public function getCor() {
        return $this->cor;
    }
}

$quadrado = new Quadrado(5, "Vermelho");

echo "Área do quadrado: " . $quadrado->calcularArea() . "<br>";
echo "Cor do quadrado: " . $quadrado->getCor();
?>