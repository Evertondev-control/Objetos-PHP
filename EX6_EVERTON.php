<?php

/*exercicio dos bichinhos(5)
criar uma classe Gato , que deve conter no minímo 3 propriedades e 3 metodos
criar uam classe Ave, que dever conter 4 propriedade e 2 metódos
*/  

class Gato
{
    public $raca_do_gato;
    public $idade_do_gato;
    public $nome_do_gato;
    public function miar()
    {
        $miau = "O {$this->nome_do_gato} miou: Miau-Miau";//
        return $miau;
    }
    public function ronronar()
    {
        $carinho = true;
        if($carinho == true) {
            $ronrono = "O {$this->nome_do_gato} ronronou: Ron-Ron"; //
        }
        return $ronrono;
    }
    public function pular()
    {
        $pulo = 5;
        if($pulo > 4) {
            $pular = "O {$this->nome_do_gato} pulou: Boim! Boing! Poim!";//
        }
        return $pular;  
    }   
}

$gato1 = new Gato();
$gato1->nome_do_gato = "Garfield";
$gato1->idade_do_gato = 8;
$gato1->raca_do_gato = "Persa";

echo $gato1->miar();
echo "</br>";
echo $gato1->ronronar();
echo "</br>";
echo $gato1->pular();

