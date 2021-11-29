<?php
$idade = 8;
if ($idade >=18){
    echo "maio de idade";
} else {
    echo "menor de idade";
}

echo "<hr>";

$func = "Ignez";
$sal = 5800;
if ($sal < 5000){
    echo "INSS de 9% <br>";
    $inss = $sal * 0.09;
    $salLiq = $sal - $inss;
    echo "O valor do INSS é {$inss} reais <br>";
    echo "O salário líquido é {$salLiq} reais <br>";
} else {
    echo "INSS de 11% <br>";
    $inss = $sal * 0.11;
    $salLiq = $sal - $inss;
    echo "O valor do INSS é {$inss} reais <br>";
    echo "O salário líquido é {$salLiq} reais <br>";
}


// echo "<hr>";

// # se o sal <5000 inss -- 9%¨

// # senao inss - 11%

// $func = "Ignez";

// $sal = 8800;

// if ($sal<5000) {

//     echo "inss 9% <br>";

//     $inss = $sal * (9/100);

//     $salLiq = $sal-$inss;

//     echo "O valor de inss é de: {$inss}<br>";

//     echo "Salárioo Líquido: {$salLiq}";



      

// } else {

//     echo "inss 11%<br>";

//     $inss = $sal * (11/100);

//     $salLiq = $sal-$inss;

//     echo "O valor de inss é de: {$inss}<br>";

//     echo "Salárioo Líquido: {$salLiq}";

// }



$user = "Ian";
$passwd = "abc1234";

if ($user == "Ian" && $passwd == "abc1234"){
    echo "Conectado";
} else {
    echo "Não Conectado";

}

// Conferir se a temperatura da sala medida em farenheit equivale a 35 C

$tempAmbF = 95.0;
$tempAmbC = 35.0;

$tempC = ( $tempAmbF - 32) * 5 / 9;

echo "<br>{$tempC} <br>";

if ($tempAmbC == $tempC){
    echo "A temperatura da sala medida em Farenheit vale 35 celsius após a conversão <br>";
} else{
    echo "A temperatura está diferente <br>";
}














?>