<!-- 1-Escreva um programa que procure e indique o maior valor (e a respetiva posição) de 
uma matriz de 4 posições introduzido pelo utilizador.  -->

<?php
    $positions = [];

    for($i = 1; $i < 5; $i++){
        echo "Digite o número na posição {$i} do array: ";
        $positions[] = intval(fgets(STDIN));
    }

    $maxValue= max($positions);
    $key = array_search($maxValue, $positions);
    $key++;
    
    echo "O maior valor é: {$maxValue} e e está na posição: {$key}. \n";
?>