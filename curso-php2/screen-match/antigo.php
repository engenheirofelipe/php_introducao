<?php

require __DIR__ . "/src/modelo/filme.php";
//  Chamando o arquivo das funções, vai buscar o arquivo na mesma pasta
// Caminho absoluto.  Como "funcoes.php" tendo o caminho absoluto de screen-match.php
require __DIR__ . "/src/funcoes.php";

echo("Bem vindo ao Screen Match \n");

$nomeFilme = "Top gun Maverick";

$anoLancamento =  2022;

$quantidadeDeNotas = $argc - 1;

$notas = [];


for ($i = 1; $i < $argc; $i++) {

    $notas[] += (float) $argv[$i];
  
}

$somaDeNotas = 0;


foreach ($notas as $nota) {

    $somaDeNotas += $nota;

}


$notaFilme = array_sum($notas) / $quantidadeDeNotas;

$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";

echo "Nota do filme: $notaFilme \n" ;

echo "Ano de lançamento: $anoLancamento\n";

// Pedaço de código com o nome de "exibeMensagemLancamento" que pode ser usado ou transferido para outro arquivo por exemplo
exibeMensagemLancamento($anoLancamento);
// Passando como parâmetro $anoLancamento, para chegar no pedaço de código lá em cima como $ano


$genero = match($nomeFilme) {

    "Top Gun - Maverick" => "ação",
    "Thor:Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido"
    
};

echo "O gênero do filme é : $genero \n";

// Chamando a função criaFilme criada em funcoes.php
// Isso não é mais um array associativo.
$filme = criaFilme(

        nome : "Thor: Ragnarok",
        anoLancamento : 2021,
        nota : 7.8, 
        genero : "super-heroi"
    
    );

echo $filme->anoLancamento;

// Funções que manipulam arrays
// Inspecionar o valor e tipo de determinada variável.
var_dump($notas);

sort($notas); // Sort função que ordena os valores

var_dump($notas);

$menorNota = min($notas);

echo "$menorNota \n";

$maiorNota = max($notas);

echo "$maiorNota \n";



// Funções que manipulam textos
var_dump($filme->nome);

//  Posição do caracter  Pegar só o Thor.
$posicaoDoisPontos = strpos($filme->nome, ":");

var_dump($posicaoDoisPontos);

// Extrair uma substring. De uma string pegar um pedaço  dela
var_dump(substr($filme->nome, 0, $posicaoDoisPontos));


// Transforma o array associativo em json
echo json_encode($filme); 

// Transforma json em array associaivo.
var_dump(json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"super-heroi"}', true));


$fileComoStringJson = json_encode($filme);

// Exportar string
// Essa função coloca o conteúdo em um arquivo. Por  parâmetro, informa o caminho do arquivo. E o segundo parametro é o que irá escrever no arquivo, o que normalmente é uma string.

file_put_contents(__DIR__ . '/filme.json', $fileComoStringJson);

// Importar. O primeiro passo é criar um novo arquivo na pasta chamado de importar.php


