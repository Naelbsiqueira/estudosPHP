<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <h1>Variáveis,Constantes e Strigs</h1>
    <p> 
        <?php 
        
        /*Diferente de outras liguagens, no PHP ('', simples) não interpreta/interpolar o conteúdo da variável.*/
        $nome="Nael";
        $sobrenome="Bernardo!";
        $sobrenome="Siqueira";
        const PAIS = "Brasil";
        
        /*Constante, não pode ser alterado e pode ser declaradas com letras maiúsculas, fica a dica como padrão. Recomendações para padronizar o código.*/
        echo"Meu nome é $nome $sobrenome" . " e moro no " . PAIS  /*Nesse contesto é um variável ! */
        /*$nomeCompletoCliente = "Camel Case
        $telefone_contato_fornecedor = "Snake Case
        $nomecursosuperior = "Min Case"*/     
         
    /* 
    $nome= "José";
    $sobrenome= "Carlos";
    $apelido= "Grandão";
    echo"$nome \"$apelido\" $sobrenome"  /*Esse processo é chamado de sequêcia de escape, serve para mostrar o simbola que se deseja na tela.


    Estudo das strigs Heredocs
    $canal = "Curso em Vídeo";
    $ano = date('Y');
    echo <<< TESTE
        Bom dia!
        Estou estudo PHP em $ano.
        Graças a professor Gustavo Guanabara estou aprendendo bastande
        Mundo obrigado ao $canal e todas sua equipe \u{1F596}.
        TESTE;


    Strigs Nowdoc
    
    $canal = "Curso em Vídeo";
    $ano = date('Y');
    echo <<< 'TESTE'
        Bom dia!
        Estou estudo PHP em $ano.
        Graças a professor Gustavo Guanabara estou aprendendo bastande
        Mundo obrigado ao $canal e todas sua equipe \u{1F596}.
        TESTE; */
    
    
    ?>
    



    </p>
    
</body>
</html>