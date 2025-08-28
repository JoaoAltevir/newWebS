<?php
    require './functions.php';

    $jogos = [0,1,0,0,0,1];

    $adao = checaResultado($jogos, 1);

    $eva = checaResultado($jogos, 0);

    echo "Adão ganhou {$adao} jogos";

    echo " Eva ganhou {$eva} jogos";