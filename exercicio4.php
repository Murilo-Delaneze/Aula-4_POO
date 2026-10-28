<?php 

abstract class FormaGeometrica{
    protected float $valor = 0;

    abstract public function calcularArea();
}

class Retangulo extends FormaGeometrica{
    public float $base;
    public float $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(){
        $this->valor = $this->base * $this->altura;
        echo "O valor da area do retangulo é: ". $this->valor;
    }
}

class Circulo extends FormaGeometrica{
    public float $raio;

    public function __construct($raio){
        $this->raio = $raio;
    }

    public function calcularArea(){
        $this->valor = 3.14 * $this->raio;
        echo "O valor da area do circulo é: ". $this->valor;
    }
}

$FormaGeometrica1 = new Retangulo(10, 10);
$FormaGeometrica1->calcularArea();
echo "<br>";
$FormaGeometrica2 = new Circulo(10);
$FormaGeometrica2->calcularArea();