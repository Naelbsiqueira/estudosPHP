<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <section>
        <h1>Número aleatórios</h1>
    <?php
    
        $alea = mt_rand(0,100);
        /*Incluindo 0 e 100. A função Rand() foi criado em 1951 - Linear Congrentiol Generator (não é muito conviável, lenta)
        mt_rand () = 1997 - Mersenne Twister 
        A partir  do PHP 7.1, rand é um simples apontamento para mt_rand()
        random_int() gera número aleatórios criptograficamente  seguros*/
        echo"Gerando um número de 0 à 100.</br>";
        echo"O valor gerado foi <strong>$alea</strong> ."; 
     ?> 
     <button onclick="javascript:document.location.reload()">&#x1f504;Gerar outro</button>
      <!--<p><a href="gerador.php"><span class="material-symbols-outlined">refresh</span> Gerar outro número</a></p>-->
    </section>
   
      
</body>
</html>