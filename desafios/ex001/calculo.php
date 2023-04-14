<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <section>
        <h1>Resultado Final</h1>
        <?php
        $num = $_POST["numero"] ?? '0' ;
        $ant = $num - 1;
        $suc = $num + 1;
        echo"O número escolhido foi $num.<br/>";
        print"Seu sucessor é $suc.</br>";
        print"Seu antecessor é $ant</br>";        
        ?>
        <button onclick="javascrip:history.go(-1)">&#x2b05; Voltar</button>

        
    </section>
    <!--<p><a href="index.html"><img src="imagem/voltar.png" alt="voltar"> Voltar</a></p> -->
</body>
</html>