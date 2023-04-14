<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo das Médias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $valor1 = $_POST['v1']??0;
    $valor2 = $_POST['v2']??0;
    $peso1 = $_POST['p1']??1;
    $peso2 = $_POST['p2']??1;  
    
    
    ?>
    <section>
        <h1>Cálculo de Médias</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="idv1">1° Valor</label>
        <input type="number" name="v1" id="idv1">
        <label for="idp1">1° Peso</label>
        <input type="number" name="p1" id="idp1">
        <label for="idv2">2° Valor</label>
        <input type="number" name="v2" id="idv2">
        <label for="idp2">2° Peso </label>
        <input type="number" name="p2" id="idp2"> 
        <button type="submit">Calcular Médias</button> 
     </form>
 </section>


 <section>
    <h1>Cálculos das Médias</h1> 
    <?php
    $resultado = ($valor1+$valor2)/2;
    $somaPeso = (int)$peso1+$peso2;
    $p1 = (int)$valor1*$peso1;
    $p2 = (int)$valor2*$peso2;
    $resultadoPeso = ($p1+$p2)/$somaPeso;

    echo"<p>Analisando os valores ".$valor1." e ".$valor2.". </p>";
    echo"<p><ul><li> A <strong>Média Aritimética Simples</strong> entre os valores é igual ".number_format($resultado,2,',','.') ."</li></p>";
    echo"<p><li> A <strong>Média Aritimética Ponderada</strong> com o peso ".$peso1." e ".$peso2." é igual ".number_format($resultadoPeso,2,',','.') ."</li></ul></p>";
 
 
 
 
    ?>
    </section>
</body>
</html>