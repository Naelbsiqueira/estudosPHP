<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real </h1>
        <?php 
            $num = $_POST['real'] ?? 0 ;
            $int = (int)$num;
            $fra = $num - $int;
            echo"Analisando este número real <strong>".number_format($num,3,',','.')."</strong/> infomado pelo usuário.<br/>";
            echo"A parte inteira é <strong>" .number_format($int,3,',','.')."</strong>.<br/>";
            echo"A parte fracionada do número é <strong>" .number_format($fra,3,',','.')."</strong>. ";    
        
        
        ?>
        <button onclick="javascrip:history.go(-1)">Voltar</button>

    </main>
    
</body>
</html>