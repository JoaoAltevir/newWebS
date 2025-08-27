<?php

/*criar funções:  

1 - O maior valor
2 - menor valor
3 - número de valores do array
4 - média
5 - ordenação e busca de um valor (retorno  bool)


*/

function maiorValor($nums = []):int{

    $maiorValor = 0;
    for($i = 0; $i < contArray($nums); $i++):
        if($nums[$i] > $maiorValor):
            $maiorValor = $nums[$i];
        endif;
    endfor;
    return $maiorValor;
}

function menorValor($nums = []):int{
    $menorValor = $nums[0];
    for($i = 0; $i < contArray($nums); $i++):
        if($nums[$i] < $menorValor):
            $menorValor = $nums[$i];
            endif;
        endfor;
        return $menorValor;
}

function contArray($nums = []):int{
   return count($nums);
}

function media($nums = []){
    $quantNumeros = contArray($nums);
    $total = 0;
    for($i = 0; $i < $nums; $i++):
        $total += $nums[$i];
    endfor;

    return $total/$quantNumeros;
}

function showArray($nums = []){
    foreach($nums as $num):
        echo $num . " ";
    endforeach;
}
function ordenarArray($nums = []):void{
    sort($nums);
    showArray($nums);
}   

function findVal($value, $array = []){
    for($i = 0; $i < contArray($array); $i++):
        if($array[$i] == $value){
            return $find = true;
        }
    endfor;
    return $find = false;
}
