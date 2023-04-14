<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario</title>
</head>
<body>
    <?php
        require_once 'Pessoa.php';
        class Funcionario extends Pessoa{
            //Atributos
            private $setor;
            private $trabalhando;


            public function mudarTrabalho($alt){
                $this -> trabalhando = ! $this-> trabalhando;

            }
            public function getSetor(){
                return $this->setor;
            }
            public function getTrabalhando(){
                return $this ->trabalhando;
            }
            public function setSetor($setor){
                $this ->setor = $setor;
            }
            public function setTrabalhando($trabalhando){
                $this ->trabalhando = $trabalhando;
            }
        } 
    
    
    
    
    ?>
    
</body>
</html>