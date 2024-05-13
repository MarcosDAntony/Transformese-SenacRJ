<?php
// : é como se fosse o faça
//teste de conteudo da var
$corzinha = "verde";

switch ($corzinha) {
  case "azul";
    echo "Sua cor favorita é azul";
    break;
  case "vermelho";
    echo "Sua cor favorita é vermelho";
    break;
  case "verde";
    echo "Sua cor favorita é verde";
    break;
  default:
    echo "Sua cor favorita não é vermelho, azul nem verde!";
}



//teste em sequência de ifs testando 
$corzinha = "verde";

switch (true) {
  case $corzinha == "azul";
    echo "Sua cor favorita é azul";
    break;
  case $corzinha == "vermelho";
    echo "Sua cor favorita é vermelho";
    break;
  case $corzinha == "verde";
    echo "Sua cor favorita é verde";
    break;
  default:
    echo "Sua cor favorita não é vermelho, azul nem verde!";
}
?>