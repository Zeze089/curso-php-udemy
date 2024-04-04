<div class="titulo">Construtores & Destrutores </div>

<?php
 
// EXEMPLOS ADICIONAIS "CONSTRUTORES":
class Example {
    private int $a;
    public function __construct(int $a) {
        $this->a = $a;
    }
}


class Example {
    private int $a;
    public function __construct(int $b) {
        $this->a = $b;
    }
}

class Example {
    public function __construct(
        private int $a
    ) {}
}



class cents {
    public readonly int $value
} { }

public function add(Cents $cents): Cents {
    return new static($this->value + $cents->value);
}

public function sub (Cents $cents): Cents {
    return new static($this->value - $cents->value);
}


public function toString(string $symbol = "R$ "): string {
    $str = "{$this->value}"; //só dá pra fazer isso aqui com inteiros pequenos, OK???
    return $symbol . preg_replace("/(\d{2})$/", ",$1", $str);
}

public static function fromFloat(float $num): Cents {
    return new static(intval($num*100));
}

include_once(__DIR__ . "/Cents.php"); // ou substitua isso aqui pela classe criando anteriormente

$venda = new Cents(0);
$venda = $venda->add(Cents::fromFloat(1.20));
$venda = $venda->add(Cents::fromFloat(3.99));
$venda = $venda->add(Cents::fromFloat(5.32));
echo $venda->toString(); // R$ 10,70


var_dump($venda->value);




