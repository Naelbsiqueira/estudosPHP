<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado na mesma página</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            $valor1 = $_POST['v1']??0;
            $valor2 = $_POST['v2']??0;        
        ?>
        <h1>SOMADOR DE VALORES</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="idvalor1">VALOR 1:</label>
            <input type="number" name="v1" id="idvalor1" step="1" value="<?=$valor1?>">
            <label for="idvalor2">VALOR 2:</label>
            <input type="number" name="v2" id="idvalor2" step="1" value="<?=$valor2?>">
            <input type="submit" value="CALCULAR">
        </form>
    </main>
    <section id="idresultado">
        <h1>RESULTADO DOS VALORES</h1>
        <?php 
            $soma = $valor1 +$valor2;
            echo "<p>Somando o ".$valor1." com o valor ".$valor2.".</p>";
            echo "<p> O resultado é ". $soma ."</p>";

        
        
        
        ?>


    </section>
    
    
</body>
</html>