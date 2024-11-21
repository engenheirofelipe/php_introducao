<?php

// Definindo o filme. Molde dizendo que todo o filme que criar precisa ter nome, ano, genero e nota .
// Classe é a palavra que modela algo. Criando um tipo próprio. Tipo que possui vários valores.
// Public, palavra reservada que vem antes da variável. 
// O modificador private é usado para controlar o acesso aos membros de uma classe
class Filme extends Titulo{

    // Não precisa do public readonly no nome e anoLancamento, pois são inicializados na classe titulo.
    // Os tres parametros não recebe public readonly, precisa serem passados para classe pai
    public function  __construct(
        string $nome, 
        $anoLancamento,
        Genero $genero,
        public readonly int $duracaoEmMinutos,
       
    ) {
        // Classe pai ou base, usa palavra reservada parent

        parent::__construct($nome, $anoLancamento, $genero);
       
    }

    public function duracaoEmMinutos():int {

        return $this->duracaoEmMinutos;
    }
}


//  O que é armazenado em memória são as propriedades do objeto, quando cria um objeto

