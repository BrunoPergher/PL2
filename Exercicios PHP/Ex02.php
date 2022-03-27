<!-- 1 - Escreva um programa para imprimir os números inteiros entre 1 e 10 na mesma linha, primeiro em ordem 
crescente e depois em ordem decrescente.-->

<?php
    $a = array(); 

    for ($i=1; $i < 11; $i++){
        array_push($a, $i);
    }

    $b = array_reverse($a);

    foreach($a as $a){
            echo $a . " | ";
    }

    echo "\n";

    foreach($b as $b){
        echo $b . " | ";
    }
?>