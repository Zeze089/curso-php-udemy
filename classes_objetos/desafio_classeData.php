<div class="titulo">Desafio Classe Data</div>

<?php

class Data {
    public $Dia = '01';
    public $Mês = 'JAN';
    public $Ano = '1970';
    
    public function apresentar() {
        echo " {$this->Dia} / {$this->Mês} / {$this->Ano} <br> ";
    }
}

$c1 = new data();
$c1->apresentar();

$c2 = new data();
$c2->Dia = '01';
$c2->Mês = '01';
$c2->Ano = '1970';
$c2->apresentar();

$c3 = new data();
$c3->Dia = '09';
$c3->Mês = '07';
$c3->Ano = '2004';
$c3->apresentar();






