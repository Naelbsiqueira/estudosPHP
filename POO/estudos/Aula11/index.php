<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instaciando a classe</title>
</head>
<body>
    <pre>
        <?php 
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';
        require_once 'Canguru.php';
        require_once 'Goldfish.php';
        require_once 'Cachorro.php';
        require_once 'Arara.php';
        require_once 'Tartaruga.php';

        $m = new Mamifero;
        $r =new Reptil;
        $p = New Peixe;
        $a = new Ave;
        $k = new Cachorro;
        $c = new Canguru;
        $g = new Goldfish;

        $m->locomover();
        $a ->locomover();
        $k ->locomover();
        $p ->locomover();
        $c -> locomover();
        $g ->locomover();
        
        
        
        
        ?>
    </pre>
    
</body>
</html>