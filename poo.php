<?php

class ProgramacaoObjetos {

    private $valorInicial;
    private $valorIntermediario;
    private $valorFinal;

    // Getters & Setters
    public function getValorInicial(){
        return $this->valorInicial;
    }
    public function setValorInicial($valorInicial){
        $this->valorInicial = $valorInicial;
    }

    public function getValorIntermediario(){
        return $this->ValorIntermediario;
    }
    public function setValorIntermediario($valorIntermediario){
        $this->ValorIntermediario = $valorIntermediario;
    }

    public function getValorFinal(){
        return $this->ValorFinal;
    }
    public function setValorFinal($valorFinal){
        $this->valorFinal = $valorFinal;
    }

    // Métodos
    public function resultado() {
        return $this->valorInicial * $this->ValorIntermediario * $this->valorFinal;
    }

}

// Exemplo de utilização.

$exemplo = new ProgramacaoObjetos();
$exemplo->setValorInicial(3);
$exemplo->setValorIntermediario(4);
$exemplo->setValorFinal(5);

echo $exemplo->resultado();

?>