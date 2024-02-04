<?php

    class Cachorro{
        public $nome;
        public $idade;
        public $raca;

    function __construct($nome, $idade, $raca){
        echo "\nWOOF\n";
        $this ->nome= $nome;
        $this ->idade= $idade;
        $this ->raca= $raca;
    }
    }

    $rufus = new Cachorro("rufus", "4 anos", "Pinscher");
    print_r($rufus);
    var_dump($rufus);

?>