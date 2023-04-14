<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsista</title>
</head>
<body>
    <?php 
        require_once 'Aluno.php';
        class Bolsista extends Aluno{
            private $bolsa;
            public function RenovarBolsa(){
                echo "<p>Bolsa renovada com sucesso do aluno(a) ". $this -> getNome()." </p>"; 
                
            }
            public function pagarMensal(){
                echo"<p>" .$this->nome. " é bolsita, paga com desconto. </p>";
            }
            public  function getBolsa(){
                return $this ->bolsa;

            }
            public function setBolsa($bolsa){
                $this ->bolsa = $bolsa;
            }
        }
    
    
    
    
    ?>
    
</body>
</html>