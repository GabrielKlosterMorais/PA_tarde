<?php

class automovel{
    public $numPort;
    public $cor;
    public $numRod;
    public $tipo;
    public $marca;
    public $nome;

    function __construct(string $nome, string $cor, int $numPort, int $numRod, string $tipo, string $marca)
    {
        $this->nome = $nome;
        $this ->cor = $cor;
        $this ->numPort = $numPort;
        $this->numRod = $numRod;
        $this->tipo = $tipo;
        $this->marca = $marca;
    }

    function buzinar()
    {
        echo "{$this->nome} ta andando\n";
    }
}

    $carro = new automovel("carro", "vermelho", 4, 4, "normal", "ferrari");
    $moto = new automovel("moto", "azul", 0, 2, "hornet", "harley");
    $onibus = new automovel("onibus", "amarelo", 3, 4, "normal", "volvo");

    $carro->buzinar();
    $moto->buzinar();
    $onibus->buzinar();
?>