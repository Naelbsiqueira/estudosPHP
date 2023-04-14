<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>
    <h1>Definição de Constantes</h1>

    <?php
    // A função 'define' é utilizada para definir a função. 
    // No primeiro parâmetro é identificador, no segundo parêmetro o nome atribuido.
    // Lembre-se, o identificador sempre com letra maiúscula.  
    define("NOME", "Nael Bernardo");
    define("IDADE", 25);
    define("ALTURA", 1.75);
    define("CASADO", false);
    
    define("TIMES",['Vasco', 'Flamento', 'Corinthians', 'Fluminence']);
    
    
    var_dump(NOME);
    var_dump(IDADE);
    var_dump(ALTURA);
    var_dump(CASADO);
    
    echo'<hr>';
    echo TIMES[2];

    var_dump(TIMES);
    echo'<hr>';



    // Diferente das variáveis, as contranste podem ser usadar em todo o programa.
    //Tanto dentro de uma variável,  como fora. 
        function exibirNome(){
            echo NOME;
        } 

    exibirNome();
    
    
    
    
    ?>
    
</body>
</html>