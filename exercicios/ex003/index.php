<?php 

//ARRAY PARA GUARDAR A LISTA DE NOMES 
$nomes = array();


do {
    echo "-- Menu de Opções --\n";
    echo "1 - Adicionar:\n";

    if(count ($nomes)>=1){
    echo "2 - Lista:\n";}

    echo "3 - Sortear:\n";
    echo "4 - Sair:\n";

    //OPCAO SELECIONADA PELO USUÁRIO
    $opcoes = readline("Digite a opção desejada:");

    echo"\n\n";

    //VALIDAÇÃO DAS OPÇÕES 
    switch ($opcoes) {
        //ADICIONAR
        case 1:
            $nomes[]= readline("Digite um novo nome:");
            echo"\n";
            break;
        //LISTA
        case 2:
            if (count ($nomes) >= 2){
            echo"-- Nomes na Lista --\n";
            foreach ($nomes as $nome) {
                echo"-".$nome.";\n";
            }
            echo"\n\n";
        }
        break;
        
        //SORTEAR
        case 3:
            if (count ($nomes) >= 2 ){
            //SORTEIO DA POSIÇÃO DO ARRAY;
            $indice = array_rand($nomes); 

            //NOME SORTEAR
            echo"- Nome Sorteado " .$nomes[$indice].";";    
            echo"\n\n";

            //REMOÇÃO DOS NOMES JÁ SORTERADOS
            unset($nomes[$indice]);
        }
        break;
    }

} while ($opcoes != 4);


 





?>