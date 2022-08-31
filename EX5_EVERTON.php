<?php

class Ave
{
    public  $nome;
    public  $especie;
    public  $comida;
    public  $nome_cientifico;
    public function voar(){
        $voo = "As {$this->nome}s voltaram e eu tambem voei: Vonn!";
        return $voo;
    }
    public function info(){
        $detalhes = "O  passáro {$this->nome_cientifico}, mais conhecido como {$this->nome}, se alimenta de {$this->comida} e sua espécie é : {$this->especie}. ";
        return $detalhes;
    }
}

$ave1 = new Ave();
$ave1->nome = "Andorinha";
$ave1->especie = "passeriformes";
$ave1->comida = "Insetos";
$ave1->nome_cientifico = "Hirundinidae";

echo $ave1->voar();
echo "</br>";
echo $ave1->info();
