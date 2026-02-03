<?php

class animal{
    public $nome;
    public $tipo;
    public $especie;
    public $peso;
    public $altura;

    function __construct(string $nome, string $tipo, string $especie, float $peso, float $altura)
    {
       $this->nome = $nome;
       $this->tipo = $tipo;
       $this->especie = $especie;
       $this->peso = $peso;
       $this->altura = $altura; 
    }

    function gritar()
    {
        echo "{$this->nome} ta gritando\n";
    }
}

    $cachorro = new animal("tobi", "spitz", "cachorro", 3.00, 0.51);
    $taturana = new animal("tuta", "marrom", "taturana", 1.00, 30.00);
    $hiena = new animal("hakuna", "preto", "hiena", 20.00, 1.00);

    $cachorro->gritar();
    $taturana->gritar();
    $hiena->gritar();

?>