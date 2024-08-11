<?php


class Maior
{

    public $numero1;
    public $numero2;
    public $numero3;
    public function TestaNumero($numero1, $numero2, $numero3)
    {
        $lista = [$numero1, $numero2, $numero3];
        print_r(max($lista));
    }
}

$numeros = new Maior();
$numeros->TestaNumero(1, 2, 3);
