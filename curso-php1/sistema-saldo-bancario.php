<?php

$saldo = 1_000;
$titularConta = 'Felipe';


do {
    echo "\n";
    echo " $titularConta, escolha uma das opções \n";
    echo "\n";
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";

    $opcao = (int) fgets(STDIN);

    switch ($opcao) {

        case 1:

            echo "************* \n";
            echo "Titular da conta: $titularConta \n";
            echo "Saldo atual: R$$saldo\n";
            echo "*************\n";
            break;

        case 2:

            echo "Qual valor deseja sacar ? \n";

            $valorASacar = (float) fgets(STDIN);

            if ($valorASacar > $saldo) {
                
                echo "Saldo insuficiente \n";

            } else {

                $saldo -= $valorASacar;

            }

            break;

        case 3:

            echo "Quanto deseja depositar ? \n";

            $valorADepositar = (float) fgets(STDIN);

            $saldo +=  $valorADepositar;

            break;

        case 4:

            echo "Volte sempre !";

            break;

        default:

            echo "Opção inválida \n";
            

            break;


    }

} while ($opcao != 4);

