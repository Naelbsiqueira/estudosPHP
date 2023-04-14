<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Pessoa</title>
</head>
<body>
    <?php
        class Pessoa {
        private $nome;
        private $idade;
        private $sexo;
        
        public function fazerAniver(){
            $this->setIdade(+1);            

        }
        function __construct($nome,$idade,$sexo){
            $this-> nome = $nome;
            $this ->idade = $idade;
            $this ->sexo = $sexo;            
        }
        public function getNome(){
            return $this -> nome;
        }
        public function getIdade(){
            return $this ->idade;
        }
        public function getSexo(){
            return $this ->sexo;
        }
        private function setNome($nome){
            $this-> nome = $nome;
        }
        private function setIdade($idade){
            $this -> idade = $idade;
        }
        private function setSexo($sexo){
            $this-> sexo = $sexo;
        }
        

    }

    
    
    
    
    
    ?>
    
</body>
</html>