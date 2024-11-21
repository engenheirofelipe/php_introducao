<?php
// extends conceito de herança. Serie é como se fosse uma subdivisão de titulo.
class Serie extends Titulo {

    private array $notas;

    public function __construct(

        string $nome, 
        $anoLancamento,
        Genero $genero,
        public readonly int $duracaoEmMinutos,
        public readonly int $temporadas,
        public readonly int $episodiosPorTemporada,
        public readonly int $minutosPorEpisodio,
    ){

        parent::__construct($nome, $anoLancamento, $genero);

   
    }

    public function duracaoEmMinutos():int {

        return $this->temporadas * $this->episodiosPorTemporada * $this->minutosPorEpisodio;
    }
}