<!-- 6 - Escreva um programa para imprimir todos os números inteiros entre dois valores introduzidos pelo
utilizador. O programa deverá verificar qual dos dois valores é o maior. -->

<?php
    echo 'Digite o primeiro valor: ';
    $valorUm = intval(fgets(STDIN));
    echo 'Digite o segundo valor: ';
    $valorDois = intval(fgets(STDIN));

    $valorMaior=max($valorUm, $valorDois);
    $valorMenor = $valorUm > $valorDois ? $valorDois : $valorUm;

    for ($valorMenor; $valorMenor <= $valorMaior; $valorMenor++){
        echo $valorMenor . " | ";
    }
    
    echo "\n Valor Maior:" . $valorMaior;
?>