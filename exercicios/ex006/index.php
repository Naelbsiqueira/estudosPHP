<?php 

//RECEBE A EXPRESSÃO MATEMÁTICA
 $expressao = readline("Digite a expressão matemática:");

 //VERIFICA A EXPRESSÃO ENVIADA, '^' SIGNIFICA UM TERMO DE NEGAÇÃO.
 if(preg_match('/[^0-9\ \+\-\/\*\(\)]/', $expressao)){
    die("A expressão é inválida. Verifique os dados enviados.\n");
 }

 //CALCULA O RESULTADO EXPRESSSÃO
 $resultado = eval('return '.$expressao.';');

 //VERIFICA O RESULTADO NUMÉRICO
 if(is_numeric($resultado)){
    die("A expressão não pode ser calculado. Verifique os dados enviados\n");

 }

 //IMPREME O RESULTADO 
echo"Resultado: ".$resultado."\n";




?>