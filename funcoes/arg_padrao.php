<div class="titulo">Argumento Padrão</div>

<?php

function saudacao($nome = 'Senhor(a)',$sobrenome = 'Cliente') {
    echo "Bem vindo, $nome $sobrenome!<br>";
}

saudacao();
saudacao(null);
saudacao(null,null);
saudacao('Fernando','js');

// USAND O 'return' ;

// function saudacao($nome = 'senhor(a)' , $sorenome = 'Cliente') {
//     return "Bem vindo, $nome $sobrenome!<br>";
// }

// echo saudacao();
// echo saudacao(null);
// echo saudacao(null,null);
// echo saudacao('fernando','porfirio');

echo'<hr>';

function anotarpedido($comida,$bebida = 'Água') {
    echo "para comer: $comida <br>";
    echo "para beber: $bebida <br>";
}


anotarpedido('cachorro-quente','coca-cola');


echo '<hr>';


function anotarpedido2($bebida = 'Agua', $comida) {
    echo "Para comer: $comida <br>";
    echo "para beber: $bebida <br>";
}

// anotarpedido2('churrasco');
anotarpedido2('delrio-trincando', 'churrasco');



