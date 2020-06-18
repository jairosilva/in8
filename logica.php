<?php

function somaMultiplosTresCinco($limiteSuperior) {
    $somaMultiplos = 0;
  
    for ($i = 1; $i < $limiteSuperior; $i++) {
      if (!($i % 3) || !($i % 5))
        $somaMultiplos += $i;
    }
  
    return $somaMultiplos;
  }

  echo somaMultiplosTresCinco(1000);

?>