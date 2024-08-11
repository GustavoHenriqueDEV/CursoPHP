<?php
class Salario
{
    public $salarioHora;
    public $horasTrabalho;
    public $salario;
    public $descontoIr;
    public $saldoFinal;

    public function __construct($salarioHora, $horasTrabalho)
    {
        $this->salarioHora = $salarioHora;
        $this->horasTrabalho = $horasTrabalho;
        $this->salario = $salarioHora * $horasTrabalho;
        $this->saldoFinal = $this->salario;
    }
    public function descontoIR()
    {
        $descontoIr = $this->salario * 0.11;
        $this->saldoFinal -= $descontoIr;
    }
    public function descontoINss()
    {
        $descontoIr = $this->salario * 0.08;
        $this->saldoFinal -= $descontoIr;
    }
    public function descontosindi()
    {
        $descontoIr = $this->salario * 0.05;
        $this->saldoFinal -= $descontoIr;
    }

    public function aplicarDesconto()
    {
        $this->descontoIR();
        $this->descontoINss();
        $this->descontosindi();
        print_r($this->saldoFinal);
    }
}

$pessoa = new Salario(20, 8);
$pessoa->aplicarDesconto();
