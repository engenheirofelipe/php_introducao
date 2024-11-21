<?php

//  Conexão do tipo post com dados sendo enviados. 

$filme = [

    'nome' => $_POST['nome'],
    'anoLancamento' => $_POST['ano'],
    'nota' => $_POST['genero'],

];

file_put_contents('filme.json', json_encode($filme));

// RECEBE E DIRECIONA

//  Função que envia um cabeçalho HTTP. O cabeçalho  HTTP que redireciona o usuário é 'Location 
header('Location: /sucesso.php?filme=' . $filme['nome']);