<!-- 17 - Escreva um programa que calcule o fatorial de um número. -->

<?php
    echo "Numero para calcular o fatorial? \n ";
    $num = fgets(STDIN);
    $valorfinal = 1;

    while ($num > 1){
        $valorfinal *= $num;
        $num--;
    }

    echo $valorfinal;
?>