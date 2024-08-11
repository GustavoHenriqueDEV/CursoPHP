<?php
///verficar, isoceles, escaleno e equilatero
class Triangulo
{
    public $lado1;
    public $lado2;
    public $lado3;
    public $listaLados;
    public $ladosUnicos;
    public function __construct($lado1, $lado2, $lado3)
    {
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
        $this->listaLados = [$this->lado1, $this->lado2, $this->lado3];
        $this->ladosUnicos = array_unique($this->listaLados);
    }
    public function testaTriangulo()
    {
        if (count($this->ladosUnicos) == 2) {
            echo "Ttriangulo isoceles";
        }
        if (count($this->ladosUnicos) == 3) {
            echo "escaleno";
        };
        if (count($this->ladosUnicos) == 1) {
            echo "equilatero";
        };
    }
}

$triangulo = new Triangulo(1, 3, 1);
$triangulo->testaTriangulo();
