<?php

    abstract class ContaBancaria{
        protected string $titular;
        protected float $saldo;

        public function __construct($titular, $saldo){
            $this->titular = $titular;
            $this->saldo = $saldo;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function depositar($valor){
            $this->saldo += $valor;
        }

        abstract public function calcularTarifa();
    }

    class ContaCorrente extends ContaBancaria{
        private int $tarifa = 15;

        public function __construct($titular, $saldo){
            parent::__construct($titular, $saldo);
        }

        public function calcularTarifa(){
            return $this->saldo -= $this->tarifa;
        }
    }

    class ContaPoupanca extends ContaBancaria{
        private int $tarifa = 0;

        public function __construct($titular, $saldo){
            parent::__construct($titular, $saldo);
        }

        public function calcularTarifa(){
            return $this->saldo -= $this->tarifa;
        }
    }

    $conta1 = new ContaCorrente('Riquelmy', 500);
    echo 'O saldo é: ' . $conta1->getSaldo() . '<br>';
    $conta1->depositar(200);
    echo 'O saldo é: ' . $conta1->getSaldo() . '<br>';
    echo 'O saldo após tarifa é: ' . $conta1->calcularTarifa() . '<br>';
    echo '<br><Br>';
    $conta2 = new ContaPoupanca('Riquelmy', 500);
    echo 'O saldo é: ' . $conta2->getSaldo() . '<br>';
    $conta2->depositar(200);
    echo 'O saldo é: ' . $conta2->getSaldo() . '<br>';
    echo 'O saldo após tarifa é: ' . $conta2->calcularTarifa() . '<br>';

?>
