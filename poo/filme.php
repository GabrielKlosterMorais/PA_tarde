<?php 

class filme{
    public $nome;
    public $dataPublicacao;
    public $custo;
    public $tempo;
    
    function __construct(string $nome, string $dataPublicacao, int $custo, string $tempo)
    {
       $this->nome = $nome;
       $this->dataPublicacao = $dataPublicacao;
       $this->custo = $custo;
       $this->tempo = $tempo; 
    }

    function passar()
    {
        echo "{$this->nome} ta passando\n";
    }
}

    $todoMundoPanico = new filme("todo mundo em panico", "2010", 55, "1.30");
    $luca = new  filme("luca monstro marinho", "2020", 30, "1.20");
    $todoMundoEmHispanico = new  filme("Todo mundo em hispanico", "2009", 15, "1.25");

    $todoMundoPanico->passar();
    $todoMundoEmHispanico->passar();
    $todoMundoEmHispanico->passar();

?>