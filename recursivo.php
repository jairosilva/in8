<?php

function menorInteiroDivisivel($numero) {
    if (($numero > 0) && ($numero % 2 == 0) && ($numero % 3 == 0) && ($numero % 10 == 0)) {
        return $numero;
    } else {
        return menorInteiroDivisivel(++$numero);
    }
    
}

echo 'Resultado: ' . menorInteiroDivisivel(0);
?>