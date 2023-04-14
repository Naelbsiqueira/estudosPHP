<?php 

//UNIDADES VÁLIDAS PARA O SISTEMA
$unidades = ['mm'=>1, 'cm'=>10, 'm'=>1000, 'km'=>1000000];


//TEXTO DAS UNIDADE VÁLIDAS
$unidadesValidas = implode(',',array_keys($unidades));

//LAÇO DE REPETIÇÃO PARA VERIFICAR SE EXISTE A UNIDADE. 
do{
//SOLICITA A UNIDADE BÁSICA PARA O USUÁRIO   
$unidadeBase = readline("Digite a unidade base('.$unidadesValidas.'): ");

//MENSAGEM DE ERRO 
if (!isset($unidades[$unidadeBase])){
    print "Unidade inválida ! \n\n";
}

}while(!isset($unidades[$unidadeBase]));


do{
    //SOLICITA O VALOR DA UNIDADE BASE PARA O USUÁRIO  
$valorBase = readline("Digite um valor: ");
    
    //MENSAGEM DE ERRO CASO NÃO SEJA NÚMERO
    if (!is_numeric($valorBase)){
        print "Valor inválida ! \n\n";
    }
    
}while(!is_numeric($valorBase));

//VALOR EM MILÍMETROS
$valorMilimetro = $valorBase * $unidades[$unidadeBase];

print "\nResultados:\n";

// IMPRIME AS UNIDADE DO SISTEMA
foreach($unidades as $unidade => $divisor) {
    //IGNORA A IMPRESSÇÃO DA UNIDADE BASE
    if ($unidade == $unidadeBase) continue; 
    //IMPRIME O VALOR CORRESPONDENTE NA UNIDADE
    echo">".($valorMilimetro / $divisor)."".$unidade."\n";
}










?>