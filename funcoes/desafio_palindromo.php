<div class="titulo"> Desafio Palindromo </div>

<?php  
 
function palindromo($palavra) {
    $ultimoIndice = strlen($palavra) -1;
    for($i = 0; $i <= $ultimoIndice; $i++) {
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não';
        }
    }
    return 'Sim';
}

echo palindromo ('zeze') . '<br>';
echo palindromo ('arara') . '<br>';



echo '<hr>';


// 2° EXEMPLO UTILIZANDO RETURN


function palindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}

echo palindromoSimples ('zeze') . '<br>';
echo palindromoSimples ('arara') . '<br>';


// REVISÃO CODIGO ;


// function palindromo($palavra) {
// 	$ultimoIndice = strlen($palavra) -1;
// 	for($i = 0; $i <= $ultimoIndice; $i++) {
// 		if($palavra[$i] !== $palavra [$ultimoIndice - $i]) {
// 			return 'Não';
// 		}
// 	}
// 	return 'Sim';
// }

// echo palindromo ('zeze') . '<br>';
// echo palindromo ('arara') . '<br>';

// RESULTADO WEB;

// NÃO
// SIM;


// // 2° EXEMPLO UTILIZANDO RETURN


// function palindromoSimples($palavra) {
// 	return $palavra === strrev($palavra) ? 'sim' : 'Não';
// }

// echo palindromoSimples ('zeze') . '<br>';
// echo palindromoSimples ('arara') . '<br>';

// RESULTADO WEB;
// NÃO
// SIM;

