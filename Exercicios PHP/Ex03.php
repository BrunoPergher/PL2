<!-- 2 - Escreva um programa que peça ao utilizador um nome e um número inteiro (entre 1 e 20). Deverá 
mostrar esse nome um número de vezes igual a esse valor inteiro. -->

<?php
    echo "Nome? \n ";
    $nome = fgets(STDIN);

    echo "Digite um valor de 1 a 20: ";
    $n = fgets(STDIN);
    
    for($i = 1; $i <= $n; $i++){
        echo $nome;
    }
?>