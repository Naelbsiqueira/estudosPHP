<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    date_default_timezone_set('America/Sao_Paulo');
    $date = date('Y');//Ano atual 
    $ano=$_POST['ano']??2000; // Ano de nascimento
    $data=$_POST['prox']??$date;
    $idade = $data-$ano ;
    ?>
    <section>
        <h1>Calculanda sua idade </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="idano">Ano de Nascimento</label>
            <input type="number" name="ano" id="idano" step="1" min="1940">
            <label for="id">Que saber sua idade em qual ano? (atualmente estamos em <strong><?=$date?></strong>)</label>
            <input type="number" name="prox" id="idprox" value="<?=$date?>">
            <button type="submit">Calcular Idade</button>
        </form>
    </section>
    <section>
        
        <h1>Resultdo </h1>
        <?php
        echo "<p>Quem nasceu em ".$ano." vai ter <strong> ".$idade." anos </strong> em ".$data."</p>";

        ?>




    </section>
    
</body>
</html>