<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa Principal </title>
</head>
<body>
    <pre>
        <?php 
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';
        $v[0] = new Video("Aula 1 POO");
        $v[1] = new Video("Aula 12 PHP");
        $v[2] = new Video("Aula 15 HTML");

        $p[0] = new Gafanhato("Nael", 29, "M", "Bernardo");
        $p[1] = new Gafanhato("Mariana", 26, "F", "Fagundes");
        print_r($p);

        $v[0]-> play();
        $v[1]-> play();
        $v[2]-> play();
        $v[0]-> like();
        $v[1]-> like();
        $v[2]-> like();
        print_r($v);


        $vis[0] = new Visualizacao($p[0], $v[2]); // Nael assiste aula 15 HTML.
        $vis[1] = new Visualizacao($p[0], $v[1]);
        $vis[0]->avaliar(5);
        $vis[0]->avaliarPorc(8);
        print_r($vis[0]);
        print_r($vis[1]);
        
        
        
        
        ?>






    </pre>
    
</body>
</html>