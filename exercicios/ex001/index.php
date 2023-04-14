<?php 
//INPUT DE QUANTIDADE DE PATINHOS
$patinhos = readline("Digite a quantidade de patinhos: ");


//VALIDAÇÃO DE QUANTIDADE DE PATINHOS;

if (!is_numeric($patinhos) || $patinhos <=1 || $patinhos >=10){
    echo"O número de patinhos digitado é inválido.\n"; 
    echo "É necessário digitar um valor
    maior do que 1 e menor que 10.\n";
    exit;
}

//LAÇO DE REPETIÇÃO
for($i = $patinhos; $i >0; $i--){
    print"\n";
    
    //CONDIÇÃO DE CONTIDADE DE PATINHOS;
    echo $i !=1 ? 
        $i ." patinhos foram passear.\n" : 
            "1 patinho foi passear.\n";
    
    //TEXTO FIXOS DA LETRA
    echo"Além das montanhas.\n";
    echo "Para brinca.\n";
    echo"A mamãe gritou: 'Quá, quá, quá, quá.'\n";

    //CONDIÇÃO RESTANTE DE PATINHOS
    switch($i){
        case 2:
            echo"Mas só 1 patinho voltou de lá.\n";
            break;
        case 1:
            echo"Mas nenhum patinho voltou de la.\n";
            break;
        case 0 :
            echo"Mas nenhuma patinho voltou de la.\n";
            break;
        default:
            echo"Mas só ".($i - 1) ." patinhos voltaram de lá.\n";
            break;
    }

}
    //ESTROFE FINAL DA MÚSICA
    echo"\nA mamãe patinha foi procurar.\n";
    echo"Além das montanhas.\n";
    echo"na beira do mar.\n";
    echo"A mamãe gritou: 'Quá, quá, quá, quá!'\n";
    echo"E os $patinhos voltaram de lá.\n";






?>