<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do servidor</title>
</head>
<body>
    <h1>Dados do Servidor</h1>
    <?php
        //phpinfo();

        ////////////////////////////////////////////////////////////////////////////
        //ESCOPO GLOBAL, é valida globalmente para todo o projeto 
        $nome  = "Nael Bernardo"; 

         function exibirNome(){ //ESCOPO LOCAL, é válida apenas para a função.
            global $nome; //Quando utilizo dentro da função 'global', consigo utilizar o dado fora dela.
            echo $nome;    
         }
         
         exibirNome();
         echo"<hr>";

         //////////////////////////////////////////////////////////////////////////////////////////
         function exibirCidade(){
            //ESCOPO LOCAL,  assim como é defininda fora da função,  é necessário difinir dentro da função
            // como escopo global para utilizar fora do escopo.
             global $cidade; 
            $cidade = "Rio de Janeiro";
         }
         exibirCidade();
         echo $cidade;
         echo"<hr>";

         ////////////////////////////////////////////////////////////////////////////////////////////
         $a =3;
         $b = 4;
         $c = 7;

         
         //ARRAY DE GLOBALS para pegar varias variáveis. 
         function soma(){
            echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c']; 
         }
         
         soma();

    ?>
    
</body>
</html>