<?php

$saldo = 7000;
$titular = "Felipe";



do {

echo "\n";
echo "$titular, escolha uma das opções \n";
echo "\n";
echo "1. Consultar saldo atual \n";
echo "2. Sacar valor \n";
echo "3. Depositar valor \n";
echo "4. Sair \n";
echo "\n";

$opcao = (int) fgets(STDIN);

switch ($opcao) {

    case 1:

        echo "\n";
        echo "Saldo atual : $saldo \n";

        break;

    case 2:

        echo "\n";
        echo "Qual valor você gostaria de sacar ? \n";

        $valorASacar = (float) fgets(STDIN);

        if ($valorASacar > $saldo){
            echo "Saldo insuficiente \n";
        }else {
            $saldo -= $valorASacar;
        }

        break;

    case 3:

        echo "\n";
        echo "Qual valor você gostaria de depositar ? \n";

        $valorADepositar = (float) fgets(STDIN);

        if($valorADepositar > 0){
            $saldo += $valorADepositar;
        } else {

            echo "\n";
            echo "Erro \n";
        }

        break;

    case 4:

        echo "\n";
        echo "Obrigado ! \n";

        break;

    default:

        echo "\n";
        echo "Opção inválida \n";

        break;


}

} while($opcao != 4);