<?php 

abstract class Eletrodomestico{
    protected string $marca;

    public function __construct($marca){
        $this->marca = $marca;
    }
    public function getMarca(){
        echo "A marca é ". $this->marca . "<br>";
    }

    abstract public function ligar();
}

class Televisao extends Eletrodomestico{
    public function ligar(){
        echo "A televisão está ligando";
    }
}

class Geladeira extends Eletrodomestico{
    public function ligar(){
        echo "A geladeira está começando a gelar";
    }
}

$Eletrodomestico1 = new Televisao("Sony");
$Eletrodomestico1->getMarca();
$Eletrodomestico1->ligar();
echo "<br>";
$Eletrodomestico2 = new Geladeira("Eletrolux");
$Eletrodomestico2->getMarca();
$Eletrodomestico2->ligar();
