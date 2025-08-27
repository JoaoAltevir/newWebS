<?php
    require './functions.php';

    $nums = [12, 5, 10, 55, 100];

    $retorno = findVal(4, $nums);

    if($retorno == true){
        echo 'Achoou';
    }else{
        echo 'Não existe esse número no array';
    }



?>