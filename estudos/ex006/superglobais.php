<!DOCTYPE html>
<html lang="ph-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos de Super-Globais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php
                //cookies são pequena variáveias guardadas dentro do navegador, por tenpo determinado; 
                setcookie("dia-da-semana", "QUINTA-FEIRA", time()+3600);
                session_start();
                $_SESSION["teste"] = "Funcionou";

                // GET, envia os dados mostrando na URL.
                echo"<h1>Super Global GET</h1>";
                var_dump($_GET);

                // POST, Envia dados de forma oculta, porem ainda são acessecíves.
                echo"<h1>Super Global POST</h1>";
                var_dump($_POST);

                //REQUEST, usa dados tanto do $_GET quando do $_POST.
                echo"<h1>Super Global REQUEST </h1>";
                var_dump($_REQUEST);

                //COOKIES, pequenas aplicações dentro do computador.
                echo"<h1>Super Global COOKIES</h1>";
                var_dump($_COOKIE);

                //
                echo"<h1>Super Global SESSETION</h1>";
                var_dump($_SESSION);

                // ENV, Mostra os dados estão alocados.
                echo"<h1>Super Global ENV</h1>";
                var_dump($_ENV);

                //SERVER,Mostra todos as especificações do SERVIDOR.
                echo"<h1>Super Global SERVER</h1>";
                var_dump($_SERVER);

                //FILEs, mostra o dados que estão sendo enviados.
                echo"<h1>Super Global FILES</h1>";
                var_dump($_FILES);

                //GLOBALS, mostra todos os dados das globais. É união de todas as globais.
                echo"<h1>Super Global GLOBALS</h1>";
                var_dump($GLOBALS);

            
            
            
            
            ?>




        </pre>



    </main>

    
</body>
</html>