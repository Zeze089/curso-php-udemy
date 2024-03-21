<div class="titulo">Função Anônimas</div>

<?php

// $soma = function ($a, $b) {
//     return $a + $b;
// };

// echo $soma(1,2) . '<br>';


$soma = function ($a, $b) {
    return $a + $b;
};

echo $soma(1,2). '<br>';

// function execultar($a, $b, $op, $funcao) {
//     $resultado = $funcao($a, $b);
//     echo "$a $op $b = $resultado<br>";
// }

// execultar(2,8, '+', $soma);


function executar($a, $b, $op, $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

executar(2,8, '+', $soma); 

// $multiplicacao = function($a, $b) {
//     return $a * $b;
// };

// execultar(5, 5, '*', $multiplicacao);

$multiplicacao = function($a, $b) {
    return $a * $b;
};
executar(5, 5, '*', $multiplicacao);


// $divisao = function($a, $b) {
//     return $a / $b;
// }

// executar(9, 3, '/', $divisao);


// divisão não funccionou !