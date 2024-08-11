<?php

class AnoBi
{
    public $ano;

    public function __construct($ano)
    {
        $this->ano = $ano;
    }
    public function verificaAnoBi()
    {
        if (($this->ano % 4 == 0 && $this->ano % 100 != 0) || ($this->ano % 400 == 0)) {
            echo "o ano $this->ano é bissexto";
        } else {
            echo "esse ano não é bissexto";
        }
    }
}
$anoteste = new AnoBi(1992);
$anoteste->verificaAnoBi();
