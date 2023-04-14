<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia da divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <?php 
    //COLETANDO OS VALORES DO FORMULÁRIO
    $dividendo = $_POST['dividendo']??0;
    $divisor  = $_POST['divisor']??1;

    ?>

    <h1>ANATOMIA DA DIVISÃO</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="iddividendo">Dividendo</label>
        <input type="number" name="dividendo" id="iddividendo" value="" step="1" value="<?=$dividendo?>">
        <label for="iddivisor">Divisor</label>
        <input type="number" name="divisor" id="iddivisor" step="1" value="<?=$divisor?>" >
        <button type="submit">Calcular</button>
    </form> 

</main>
<section id="idresultado">
    <h1>RESULTADO</h1>
    <?php 
      //CALCULANDO PARA OBTER O RESULTADO
      $resultado  = floor($dividendo / $divisor);
      $partInt  = (int)$dividendo % $divisor; 

    //IMPRIME O RESULTADO NA TELA
    echo "<p>Divindo ".$dividendo." pelo divisor  ".$divisor.".</p>";
    echo "<p>O resultado é ". $resultado."</p>";
    echo "<p>E resta ".$partInt.".</p>";
       
    
    ?>


</section>
    
</body>
</html>



<?php 




?>