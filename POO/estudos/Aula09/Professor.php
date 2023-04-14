<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor</title>
</head>
<body>
    <?php
    require_once 'Pessoa.php';
    class Professor extends Pessoa{
        //Atributo
        private $especialidade;
        private $salario;

        public function ReceberAum($aum){
            $this ->salario += $aum; 


        }
        public function getEspcialidade(){
            return $this -> especialidade;
        }
        public function getSalario(){
            return $this -> salario;
        }
        public function setEspecialidade($especialidade){
            $this -> especialidade = $especialidade;
        }
        public function setSalario($salario){
            $this -> salario = $salario;
        }
    }
    
    
    ?>
    
</body>
</html>