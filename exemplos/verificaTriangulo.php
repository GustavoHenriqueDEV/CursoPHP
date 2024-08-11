<?php
///array_unique
//count
class Triangulo
{
    public $lado1;
    public $lado2;
    public $lado3;
    private $lados;
    private $ladosUnicos;
    public function __construct($lado1, $lado2, $lado3)
    {
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
        $this->lados = [$this->lado1, $this->lado2, $this->lado3];
        $this->ladosUnicos = array_unique($this->lados);
    }
    public function isoceles()
    {
        if (count($this->ladosUnicos) == 2) {
            echo "triangulo isoceles";
            echo '<br>';
        } else {
            echo "não é isoceles";
            echo '<br>';
        }
        //print_r($this->ladosUnicos);
        //print_r(count($this->ladosUnicos));
    }
    public function escaleno()
    {
        if (count($this->ladosUnicos) == 3) {
            echo "triangulo isoceles";
            echo '<br>';
        } else {
            echo "não escaleno";
            echo '<br>';
        }
    }
    public function equilatero()
    {
        if (count($this->ladosUnicos) == 1) {
            echo "é um triangulo equilatero";
            echo '<br>';
        } else {
            echo "não é equilatero";
            echo '<br>';
        }
    }
}
$Angulo1 = new Triangulo(1, 1, 1);
$Angulo1->isoceles();
$Angulo1->equilatero();
$Angulo1->escaleno();
