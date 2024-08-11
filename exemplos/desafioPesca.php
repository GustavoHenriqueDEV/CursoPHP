<?php
class Peso
{
    public $quiloPeixe;
    public $regra = 50;
    public $multa;

    public function __construct($quiloPeixe, $multa)
    {
        $this->quiloPeixe = $quiloPeixe;
        $this->multa = $multa;
    }
    public function testaPeso()
    {

        if ($this->quiloPeixe > 50) {
            $this->multa = ($this->quiloPeixe - $this->regra) * 4;
            echo $this->multa;
        } else {
            echo "O peso de peixes esta na norma";
        }
    }
}

$joao = new Peso(60, 0);
$joao->testaPeso();
