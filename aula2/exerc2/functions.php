<?php

    function checaResultado($jogos, $num){
        $cont = 0;
        for( $i = 0; $i < count($jogos); $i++ ){
            if($jogos[$i] == $num){
                $cont++;
            }
    }    

    return $cont;
}