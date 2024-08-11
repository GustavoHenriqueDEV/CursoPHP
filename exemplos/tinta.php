<?php



class lojaTinta
{
    public $coberturalitro = 3;
    public $litorPorlata = 18;
    public $precoLata = 80.00;

    public function tamanhoArea($area)
    {
        $litrosNecessarios = ($area / $this->coberturalitro);
        $latasNecessarias = ($litrosNecessarios / $this->litorPorlata);
        $precoTotal = $latasNecessarias * $this->precoLata;
        print_r($precoTotal);
    }
}
$lata1 = new lojaTinta();
$lata1->tamanhoArea(5);
