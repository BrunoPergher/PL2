<!-- 1. Divida o desempenho do etanol pelo desempenho da gasolina
(se seu carro faz 7,3 km/litro com etanol e 10 km/l com gasolina, você deve dividir 7,3 por 10,
 que é igual a 0,73 ou 73%. Pronto, você achou o rendimento do carro com etanol).
2. Faça agora o cálculo da relação do preço etanol/gasolina na bomba: divida o valor do etanol
pelo do da gasolina (exemplo: se o litro do etanol custou R$ 2,74 e o da gasolina R$ 4,64, a relação, então, é de 0,59 ou 59%).
3. A relação de preço acima (59%) dá uma enorme economia ao consumidor que optar por abastecer
seu veículo com etanol. Se este cálculo resultar em 73%, por exemplo, o motorista também estará economizando ao optar pelo etanol. -->

<?php
   $mediaEtanol = 7.3;
   $mediaGasosa = 10;
   $precoGasosa = 7;
   $precoEtanol = 6;

   $relacaoPrecoEtaGas = $precoEtanol / $precoGasosa;
   $relacaoMediaEtaGas = $mediaEtanol / $mediaGasosa;
   
    if($relacaoPrecoEtaGas < $relacaoMediaEtaGas ){
        Echo("etanol");
    } else {
        Echo("gasosa");
    }
?>