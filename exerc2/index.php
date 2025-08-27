<?php


function media($nota1, $nota2, $nota3){
    return ($nota1 + $nota2 + $nota3) / 3;
}

$nota1 = 4.0;
$nota2 = 4.0;
$nota3 = 4.5;

if(media($nota1, $nota2, $nota3)>= 7 ){
    echo("Aprovado");
}elseif(media($nota1, $nota2, $nota3) < 7 && media($nota1, $nota2, $nota3) >= 4){
    echo("Prova final");
}elseif(media($nota1, $nota2, $nota3 < 4)){
    echo("Reprovado");
};