<?php

Class Pessoa{

    public $sexo;
    public $altura;

};

$homem1 = new Pessoa();

$homem1->sexo = "F";
$homem1->altura = 1.60;


Function calcPesoIdeal(Pessoa $pessoa) {
    if($pessoa->sexo == "M") {
        $peso = (72.7 * $pessoa->altura) - 58;
        echo("O peso ideal para esse homem é " . $peso );
    }elseif($pessoa->sexo == "F") {
        $peso = (62.1 * $pessoa->altura) - 44.7;
        echo("O peso ideal para essa mulher é " . $peso);
    };
}

calcPesoIdeal($homem1);