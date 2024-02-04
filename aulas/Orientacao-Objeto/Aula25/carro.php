
<?php
class Carro {
      // propriedades
      public $marca;
      public $modelo;
      public $ano;
      public $cor;

      // método
      function __construct($marca,$modelo,$ano,$cor) {
          echo "\nCarro criado!";
          $this->marca = $marca;
          $this->modelo = $modelo;
          $this->ano = $ano;
          $this->cor = $cor;
      }

      // métodos
      function ligar() {
          echo "\nO carro está ligado.";
      }

      function apresentacao() {
        $marca = "Civic";
        echo "\nCarro: $this->marca, $this->modelo, $this->ano, $this->cor";
      }
  }

  // Criando um objeto
  $meuCarro = new Carro("Toyota","Corolla","2024","Prata");
  $meuCarro->ligar(); 
  $meuCarro->apresentacao(); 
  $meuCarro->modelo = "Etios";

  $meuCarro->apresentacao(); 
  
  //   var_dump($meuCarro);
  // $meuCarro->marca = "Toyota";
  // $meuCarro->modelo = "Corolla";
  // $meuCarro->ano = "2024";
  // $meuCarro->cor = "Prata";
  ?>