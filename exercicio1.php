<?php

class Frete{
    public int $peso =0;
    public float $valor = 0;

    public function Calcularfrete($peso){
    }
    public function exibirFrete(){
        echo "O peso da mercadoria é " . $this->peso . "<br>";
        echo "O valor do Frete é " . $this ->valor . "<br>";
    }
}

class FreteNormal extends Frete{
    public function Calcularfrete($peso){
        $this->peso = $peso;
        $this->valor += 10 + (2*$peso);
    }
}

class FreteExpresso extends Frete{
    public function Calcularfrete($peso){
        $this->peso = $peso;
        $this->valor += 20 + (5*$peso);
    }
}

class RetiradaLoja extends Frete{
    public function Calcularfrete($peso){
        $this->peso = $peso;
        echo "O frete é de graça.";
    }
}

$Frete1 = new FreteNormal();
$Frete1->Calcularfrete(3);
$Frete1->exibirFrete();