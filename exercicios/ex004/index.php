<?php 

//CRIAÇÃO DO ARRAY COM AS NOTAS DISPONÍVEIS PARA SAQUE
$cedulas = [5, 10, 20, 50, 100 ];

//TRANFORMAÇÃO DO ARRAY PARA STRING e INFORMA A CÉDULAS DISPONÍVEIS PARA SAQUE 
print " - Cedulas disponíveis: ".implode(', ', $cedulas)."\n";


//SOLICITA O VALOR PARA SAQUE

$valorSaque = readline("Digite um valor para saque:");


//VERIFICA O VALOR DO SAQUE 
if ($valorSaque % $cedulas[0]>0){
    die("Valor solicitado não pode ser atendido pelas células disponíveis!"); 
}

//AUXILAR O CALCULO DO VALOR RESTANTE
$valorRestante = $valorSaque;

//CÉDULAS PARA O SAQUE;
$cedulasSaque = [];

//PRIORIZA AS CÉDULAS MAIORES
rsort($cedulas); 

//INTERA AS CÉDULAS DIPONÍVEIS 
foreach ($cedulas as $cedula) {
    //VERIFICA O VALOR DA CÉDULA
    if ($cedula >$valorRestante) continue;
    
    //QUANTIDADE DA CÉDULA ATUAL 
    $quatidade  = floor($valorRestante /$cedula);

    //CALCULA O VALOR RESTANTE, APÓS UTILIZAR A CÉDULA ATUAL 
    $valorRestante -= ($cedula * $quatidade);

    //CÉDULAS PARA O SAQUE
    $cedulasSaque[$cedula]= $quatidade;

}

//VALOR DO SAQUE
echo "\nSaque  de R$".$valorSaque."\n";

//CÉDULAS RETORNADAS 
foreach($cedulasSaque as $cedula => $quatidade){
    echo "- ".$quatidade." x R$". $cedula.";\n";

}



?>