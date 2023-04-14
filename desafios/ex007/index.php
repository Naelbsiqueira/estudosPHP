<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //QUANTIDADE DE SALÁRIO
        $salario = $_POST['salario']??0;

        //CALCULAR O RESTO E 
        $quantidadeSalario = floor($salario / 1380);
        $resto = ($salario % 1380);
    
    
    ?>
    <section>
        <h1>Informe seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

        <label for="idsalario">Salário</label>
        <input type="number" name="salario" id="idsalario" step="0,01" ><!--value="<//?$resto?>"-->
        <p>Considerando o salário mínimo de <strong>R$1380,00</strong></p>
        <button type="submit">Calcular</button> 
        
        
        </form>




    </section>
    <section>
        <h2>Resultado</h2>
        <?php
        
        echo"<p>Quem recebe um salario ".number_format($salario,2, ',','.')."R$";
        echo" ganha ".$quantidadeSalario." <strong>salário mínimos</strong> + </p>";
        echo"<p> ".number_format($resto,2, ',','.')."R$</p>";
        
        
        
        
        
        ?>
    </section>
    
</body>
</html>