<div class="titulo">Primeira Classe</div>

<?php
echo'Familia Porfirio <br>';
class Cliente {
    //  ATRIBUTO
    public $nome = 'zeze';
    public $idade = '19';

    public function apresentar() {
        echo "Nome: {$this->nome} &nbsp Idade: {$this->idade} <br>";
    }
}


$c1 = new Cliente();
// $c1->nome = 'Fernando_js01';    << USADO PARA MODIFICAR AS VARIAVEIS (NOME E IDADE)
// $c1->idade = '22';
$c1->apresentar();


$c2 = new Cliente();
$c2->nome = 'Tocão';
$c2->idade = '49';
$c2->apresentar();

$c3 = new Cliente();
$c3->nome = 'Mônica';
$c3->idade = '16';
$c3->apresentar();

$c4 = new Cliente();
$c4->nome = 'Jacinta';
$c4->idade = '40';
$c4->apresentar();

$c5 = new Cliente();
$c5->nome = 'Ruth';
$c5->idade = '22';
$c5->apresentar();

// EXEMPLO SEMELHANTE:
// class caracteristicaDeMulta {
//     public $moto = 'Broz 160';
//     public $multa = 'Rua Coronel-Teodoro';
//     public $excVel = 'Veiculo Acima de 120 km';

//     public function apresentar () {
//         echo" Modelo do veiculo: {$this->moto} <br> Local Da Infração: {$this->multa} <br>Motivo da Multa: {$this->excVel}";
//     }
// }


// $c1 = new caracteristicaDeMulta ();
// $c1->apresentar();
