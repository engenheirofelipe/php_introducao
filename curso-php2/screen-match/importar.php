<?php

$caminhoArquivo = __DIR__ . '/filme.json';

$dadosArquivo   = file_get_contents($caminhoArquivo);

$filmes    = json_decode($dadosArquivo, true);

var_dump($filmes);