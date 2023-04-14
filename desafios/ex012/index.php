<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $sec = $_POST['sec']??0;
    $min = $sec/60;
    $hor = $min/60;
    $dia = $hor/24;
    $sem = $dia/7;
    if ($sec%60 == 0){
        $sec = 0;
    }
    if ($min%60 == 0){
        $min = 0;
    }
    if ($hor%24 == 0){
        $hor = 0;
    }

    ?>
    <section>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="sec">Qual é o total de segundos ?</label>
        <input type="number" name="sec" id="idsec" step="1" value="0" min="1">
        <button type="submit">Calcular</button>
        </form>
    </section>
    <section>
        <?php 
        print"<h1>Totalizando tudo</h1>";
        print"<p>Analiando o número que você digitou, <strong>" .$sec. " segundos </strong> equivalem a um tempo total de:</p>";
        print "<p> ".$sem." semanas</p>";
        print "<p> ".$dia." dias</p>";
        print "<p> ".$hor." hora</p>";
        print"<p> ".$min." minutos </p>";
        print"<p> ".$sec." segundo </p>";
        
        
        
        
        
        
        ?>




    </section>
    
</body>
</html>