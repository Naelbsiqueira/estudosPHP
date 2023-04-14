<?php 

//TAMANHO DA SENHA 
$tamanho = (int)readline("Digite o tamanho da senha (entre 6 e 60): ");

//VERIFICA O TANHO DA SENHA
if($tamanho < 6 || $tamanho > 60){
    die ("Tamanho Inválido!\n");

}

//CARACTERES DA SENHA 
$caracteres = [];

//MAIÚSCOLAS

if (readline("Permitir letras MAIÚSCULAS? [s/n] ") =='s'){
    $caracteres = array_merge($caracteres,range("A","Z"));

}

//MINÚSCULAS
if (readline("Permitir letras MINÚSCULAS? [s/n] ") =='s'){
    $caracteres = array_merge($caracteres,range("a","z"));

}
//CARACTERES NUMÉRICOS 
if (readline("Permitir caracteres NUMÉRICOS? [s/n] ") =='s'){
    $caracteres = array_merge($caracteres,range(0,9));
    
}
//CARACTERES ESPECIAIS 
if (readline("Permitir caracteres ESPECIAIS? [s/n] ") =='s'){
    $caracteres[] = '!';
    $caracteres[] = '@';
    $caracteres[] = '#';
    $caracteres[] = '$';
    $caracteres[] = '*';
    $caracteres[] = '§';
    $caracteres[] = '&';
    $caracteres[] = '%';
    $caracteres[] = '¢';
    $caracteres[] = '-';    
}

//VALIDAÇÃO DOS CARACTERES DA SENHA 
if (empty($caracteres)){
    die("Nenhum caracteres definido\n\n");

} 

//AJUSTA A QUANTIDADE DE CARACTERES
while(count($caracteres)<$tamanho){
    $caracteres = array_merge($caracteres,$caracteres);
}

//BAGUNÇA OS CARACTERES 
shuffle($caracteres);

//VATIA OU PARTE DA SENHA
//NOVA SENHA 
$senha= implode('', array_slice($caracteres, 0, $tamanho));

    //IMPRIME A SENHA
    echo"\nNova senha: ".$senha."\n\n";
?>