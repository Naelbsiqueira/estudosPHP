<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Caneta</title>
</head>
<body>
    <?php

    class Caneta{
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;
        
        function rabiscar(){
            if ($this -> tampada == true) {
                print "<p> ERRO! Não posso rabiscar</p>";
            } else {
                print "<p>Estou Rabiscando... </p>"; 
            }
                

        }
        function tampar(){
            $this -> tampada = true;
           

        }
        function destampar(){
            $this -> tampada = false;

        }
    }
    



    ?>
    
</body>
</html>