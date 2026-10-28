<?php 

abstract class Funcionario{
    protected string $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        $this->nome;
        echo "O nome é: ". $this->nome;
    }

    abstract public function calcularSalario();
}

class FuncionarioFixo extends Funcionario{
    public float $salarioMensal;

    public function __construct($salarioMensal){
        $this->salarioMensal = $salarioMensal;
    }

    public function calcularSalario(){
        echo "Funcionário Fixo: R$". $this->salarioMensal;
    }
}

class FuncionarioComissionado extends Funcionario{
    public float $salarioBase;
    public float $salarioNovo = 0;
    public float $venda;

    public function __construct($salarioBase, $venda){
        $this->salarioBase = $salarioBase;
        $this->venda = $venda;
    }

    public function calcularSalario(){
        $this->salarioNovo = $this->salarioBase + ($this->venda / 10);
        echo "Funcionário comissionado: R$". $this->salarioNovo;
    }
}

$Funcionario1 = new FuncionarioFixo(10000);
$Funcionario1->calcularSalario();
echo "<br>";
$Funcionario2 = new FuncionarioComissionado(1500 ,8000);
$Funcionario2->calcularSalario();