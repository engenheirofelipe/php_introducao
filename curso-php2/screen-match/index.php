<?php

require __DIR__. "/src/modelo/genero.php";

require __DIR__ . "/src/modelo/titulo.php";

require __DIR__ . "/src/modelo/filme.php";

require __DIR__ . "/src/modelo/serie.php";

require __DIR__ . "/src/calculos/calculadoraDeMaratona.php";

echo "Bem vindo ao screen match";

// Quando passa a propriedade 'Thor - Ragnarok' por exemplo, isso chega no parâmetro $nome (que está em filme.php)  uma propriedade também chamada nome é criada com o modificador de aceeso private que tbm está 
// em filme.php
$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    Genero::SuperHeroi,
    10,
);


// Aplicando as notas de avaliações
$filme->avalia(10);
$filme->avalia(8);
$filme->avalia(7);
$filme->avalia(8);
$filme->avalia(6);
$filme->avalia(4);


var_dump($filme);



// Exibindo a media
echo $filme->media() . "\n";

// Exibir o ano de lançamento, criando um método para acessar essa propriedade privada. O método é public mas a propriedade é privada
echo $filme->anoLancamento . "\n";

$serie = new Serie('Lost', 2007, Genero::Drama,250, 10, 20, 30);

echo $serie->anoLancamento . "\n";

$serie->avalia(8);

echo $serie->media() . "\n";

$calculadora = new calculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona você precisa de $duracao minutos";



