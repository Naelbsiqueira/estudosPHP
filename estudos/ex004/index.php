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
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php
        $n = $_GET["nome"] ??"nome não";
        $s = $_GET["sobrenome"] ?? "digitado";
        echo "<p>É um prazer te conhecer, <strong>$n $s </strong>! Este é o meu site.</p>"
        ?>

        <p><a href="index.html">Voltar a página anterior.</a></p>
    </main>
    
</body>
</html>