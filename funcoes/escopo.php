<div class="titulo">Função & Escopo</div>

<?php

function ExecultarCodigo() {
    echo"bom dia,";
    echo"seja bem vindo ao painel!<br>";
}

ExecultarCodigo();
ExecultarCodigo();
ExecultarCodigo();

echo"<br>";


$variavel = 1;

function trocaValor() {
    global $variavel;
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}
echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";

echo"<br>";



function trocaValorDeVerdade() {
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

echo"<br>";



var_dump(trocaValorDeVerdade());




echo"<br>";

$a = 10;
$b = 20;
$c = 30;

function Soma()
{
    global $a, $b, $c;

    $c = $a + $b + $c ;
}

Soma();
echo $c;

