<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAIZ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $valor = $_POST['numero']?? 1 ;

    
    
    ?>
    <main>
        <h1>Informe um número</h1> 
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
        <label for="idnumero">Número</label>
        <input type="number" name="numero" id="idnumero" step="0.01" value="<?$valor?>">
        <button type="submit">Calcular Raizes</button>  
        
        </form> 
    </main>
    <section>
        <h1>Resultado Final</h1>
        <?php
        $quadrada = $valor **(1/2);
        $cubica = $valor **(1/3);
        
        echo"<p>Analisando o <strong> número ".$valor." </strong> temos:</p>";
        echo "<p><ul><li> A sua raiz quadrada é <strong>".number_format($quadrada,3,',')."</strong>.</li></p>";
        echo "<p> <li>A sua raiz cúbica é <strong>".number_format($cubica,3,',')."</strong>.</li> </ul></p>";
     
        
        
        ?>


    </section>
    
    
</body>
</html>