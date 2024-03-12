<div class="titulo">Argumento & Retorno</div>

<?php

function ObterMensagem() {
    return' Seja Bem Vindo! ';
}

ObterMensagem();
$Mensagem = ObterMensagem();
echo $Mensagem;
echo '<br>',ObterMensagem();
echo '<br>';

var_dump(ObterMensagem());



echo'<hr>';



function ObterMensagemComNome($nome) {
    return" Seja Bem Vindo {$nome}! ";
}

echo"<br>",ObterMensagemComNome('zeze');
echo"<br>",ObterMensagemComNome('Tocão');
echo"<br>",ObterMensagemComNome('Jacinta');



echo'<hr>';



function soma ($a, $b) {
    return ($a + $b);
}

$x =5000;
$y =4000;

echo '<br>', soma(4,5);
echo '<br>', soma(40,50);
echo '<br>', soma(400,500);
echo '<br>', soma($x,$y);



echo'<hr>';



function TrocaValor($a,$NovoValor) {
    $a = $NovoValor;
}

$variavel = 1;
TrocaValor($variavel, 3);
echo'<br>', $variavel;



echo'<hr>';

// MUDANDO A VARIAVEL PARA 3



function TrocaValorDeVerdade(&$a, $NovoValor) {
    $a = $NovoValor;           
}

TrocaValorDeVerdade($variavel, 2);
echo '<br>', $variavel;



echo'<hr>';




 

// function ObterNumero() {
//     return 'seu numero é 88981894333 estou certo?';
// }

// ObterNumero();
// $Numero = ObterNumero();
// echo $Numero;

//RESULTADO WEB [seu numero é 88981894333 estou certo?]



// function NomeDoPai() {
//     return' antônio fernandes Porfirio,mas conhecido como Tocão';
// }
//  NomeDoPai();
//  $NDP = NomeDoPai();
//  echo $NDP;

//RESULTADO WEB [antônio fernandes Porfirio,mas conhecido como Tocão]