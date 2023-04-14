<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desavio 01</title>
</head>
<body>
    <pre>
        <?php

        require_once 'ContaBanco.php';
        $p1 = new ContaBanco();
        $p2 = new ContaBanco();
        $p1->abrirConta("CC");
        $p1->setDono("Jubileu");
        $p1 ->setNumconta(1111);
        $p2->abrirConta("CP");
        $p2->setDono("Creuza");
        $p2->setNumconta(2222);

        $p1->depositar(300);
        $p2->depositar(400);
        $p1->sacar(350);
        $p2->sacar(550);

        $p1->fecharConta();
        $p2->fecharConta();

        print_r($p1);
        print_r($p2);


        
        
        
        
        
        ?>
    </pre>
    
</body>
</html>