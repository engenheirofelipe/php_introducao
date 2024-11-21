<?php 
//  Tag php para indicar código 


echo("Bem vindo ao Screen Match \n");

$nomeFilme = "Top gun Maverick";
$nomeFilme = "Thor: Ragnarok";
$nomeFilme = "Se beber não case";

// argv = variável atribuída ao ano de lançamento. Contém todos os valores que forem passados no terminal
// argv contém vários valores. Armazena todos os valores inclusive o nome do programa.

// argv[1] acessando o primeiro indice que pega o primeiro parametro
//  "??", mostra se o usuário não informar nada, ele traz um valor padrão

$anoLancamento =  2022;

$quantidadeDeNotas = $argc - 1;

$notas = [];


// Todo for tem tres partes, com cada uma das partes sendo expressão
// inicialização;  $i = 1, Inicializar o loop com a variavel i.
// condição da repetição; $i < $argc,  valor booleano que vai ser avaliado a cada iteração 
// incremento; $i += 1, ($i++ operador de incremento)  Ação executada no final de ada loop

for ($i = 1; $i < $argc; $i++) {

    $notas[] += (float) $argv[$i];
    // Os colchetes representa um array
}

// Definindo a soma de notas
$somaDeNotas = 0;
// Numero de elementos no array. Count, conta a quantidade de elementos que tem no array.
// for ($i = 0; $i < count($notas); $i++) {

//     $somaDeNotas += $notas[$i];

// }

// var_dump($notas);

// O for each permite que percorra o array, e para cada um dos elementos, ele permite que tenha uma nova variável sendo criada
// Pra cada uma das notas, vai chamar nota.
foreach ($notas as $nota) {

    $somaDeNotas += $notas;

}

// Enquanto a expressão for verdadeira, executa o bloco

// $i = 1;

// while ($argv[$i] != 0 ) {

//     $somaDeNotas = $argv[$i++];

// }

// $somaDeNotas += $argv[1];
// $somaDeNotas += $argv[2];
// $somaDeNotas += $argv[3];



// Notas dadas por  pessoas diferentes, somar as notas e tirar a média
// Todo operador possui uma precedência. Qualquer operador possui. A divisão vem primeiro que soma
//  Porém ao colocar parênteses entre os números que estão somando , a soma tem maior precedência, senda feita assim a soma primeiro.
// += Adiciona à própria variável, o que colocar como valor.

// $argc - 1 para não contar o nome do arquivo
$notaFilme = array_sum($notas) / $quantidadeDeNotas;

$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;
// A comparação retorna um booleano





// ".ponto" é o operador de concatenação
echo "Nome do filme: " . $nomeFilme . "\n";

echo "Nota do filme: $notaFilme \n" ;

echo "Ano de lançamento: $anoLancamento\n";

//  Se ano de lançamento for maior que 2022 executa algo

if($anoLancamento > 2022) {

    echo "Esse filme é um lançamento \n";

} elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {

    echo "Esse filme ainda é novo \n";
}

else {

    echo "Esse filme não é lançamento \n";
}

//  Casamento do nome do filme com alugmas opções que irá ser oferecidas . MATCH
//  MATCH é uma expressão. ; sempre marca o final de uma expressão. 

$genero = match($nomeFilme) {

    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido"
};

echo "O gênero do filme é : $genero \n";

// $notasParaOFilme = [
//     10,
//     8,
//     9,
//     7.5,
//     5

// ];

// array associativo
$filme = [
    'nome' => "Thor:Ragnarok",
    'ano' => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];

echo "Nome do filme é $filme[nome] \n" ;
echo "Ano do filme é  $filme[ano]";

var_dump($notasParaOFilme);


