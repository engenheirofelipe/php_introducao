<?php 

// Pedaço de código com o nome de "exibeMensagemLancamento" que pode ser usado ou transferido para outro arquivo por exemplo
// Retorno vazio : void
// Função de subrotina, não retorna nada
function exibeMensagemLancamento(int $ano): void {

    if ($ano > 2022) {

        echo "Esse filme é um lançamento \n";

    } elseif ($ano > 2020 && $ano <= 2022) {

        echo "Esse filme ainda é novo \n";
    }

    else {

        echo "Esse filme não é lançamento \n";
    }

}

// :bool a função retorna um valor boleano
// Devolve retorno
function incluidoNoPlano(bool $planoPrime,  int $anoLancamento): bool {

   return $planoPrime || $anoLancamento < 2020;

   // A expressão que estiver depois de return  vai ser o valor da função depois que ela for executada, or seja, executa a fução depois retorna o valor.

}

// Retorna array associativo
// Retorna uma variável do tipo Filme que foi criada em 'filme.php'
function criarFilme(string $nome, int $anoLancamento, float $nota, string $genero): Filme{

    //  Criar a variável filme
    // new cria a variável do tipo filme
    // A variável filme é uma instância do tipo filme.
    // A classe criada é uma definição de um tipo.  Tipo complexo que é composto por outros tipos.  Quando cria uma variável do tipo de uma classe, estamos criando um objeto. Criar objeto = instanciar.
    $filme = new Filme();

    $filme->nome = $nome; //  Na variável filme, eu quero acessar de alguma forma , o nome dele. Para isso, tem que usar -> 
    $filme->anoLancamento = $anoLancamento;
    $filme->genero = $genero;
    $filme->nota = $nota;

    return $filme;


}

function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero) {

    return [

        'nome' => $nome,
        'ano' => $anoLancamento,
        'nota' => $nota,
        'genero' =>$genero

    ];

}