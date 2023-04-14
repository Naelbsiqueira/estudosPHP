<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa</title>
</head>
<body>
    <?php 
        class Pessoa{
        //Atributos
            private $nome;
            private $idade;
            private $sexo;

            public function fazerAniv(){
                $this-> idade ++;
                

            }
            public function getNome(){
                return $this->nome;
            }
            public function getIdade(){
                return $this->idade;

            }
            public function getSexo(){
                return $this-> sexo;

            }
            public function setNome($nome){
                $this -> nome = $nome;

            }
            public function setIdade($idade){
                $this ->idade = $idade;

            }
            public function setSexo($sexo){
                $this -> sexo= $sexo;

            }



    }
    
    
    
    
    ?>
    
</body>
</html>