<div class="titulo">Argumento & Variaveis</div>

<?php

// function soma($a, $b) {
//     return $a + $b;
// }

// echo soma(14,15) . '<br>';
// echo soma(6,5,4) . '<br>';


// 2º EXEMPLO :)


// function soma($a,$b,$c,$d) {
//     return $a+$b+$c+$d;
// }

// echo soma(20,20,20,20) . '<br>';


// 3º EXEMPLO COMPLEXO :)


// function somaCompleta(...$numeros) {
//     $soma = 0;
//     foreach($numeros as $num) {
//         $soma += $num;
//     }
//     return $soma;
// }

// echo somaCompleta(10,20,30,40,50);

// $array = [6, 7, 9];
// echo '<br>' . somaCompleta(...$array);


// 4º EXEMPLO COMPLEXO :)
function jogadores($Titular, ...$EsquentaBanco) {
    echo "Titular: $Titular <br>";
    if($EsquentaBanco) {
        foreach($EsquentaBanco as $ESQTB) {
            echo "EsquentaBanco: $ESQTB <br>";
        }
    }
}

echo '<br>';
jogadores("Fernando js 22","peba 01" ,"ciel 01");