<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pessoa lê livro </h1>
    <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Livro.php';
            
            $p[0] = new Pessoa("Pedro", 22, "M");
            $p[1]= new Pessoa("Maria", 35, "F");
            
            $l[0] = new Livro("PHP Básico", "Jose da silva", 300, $p[0]);
            $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
            $l[2] = new Livro("Python para Iniciantes", "Gustavo Guanabara", 450, $p[1]);
            print_r($p[1]);
            print_r($l[2]);
            $l[0]->abrir();
            $l[0]->folhear(50);
            $l[0]->detalhes();
            
            $l[1]->abrir(); 
            $l[1]->folhear(50);
            $l[1]->avancarPag();
            $l[1]->detalhes();
           

            $l[2]->detalhes();

            
        
        ?>



    </pre>
    
</body>
</html>