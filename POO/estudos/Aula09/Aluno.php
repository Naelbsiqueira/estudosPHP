<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno</title>
</head>
<body>
    <?php
        require_once 'Pessoa.php'; 
        class Aluno extends Pessoa{
            //Atributos
            private $matri;
            private $curso;



            public function cacelarMatri(){
                echo "<p>Matricula será cancelada</p>";

            }
            public function getMatri(){
                return $this->matri;
            }
            public function getCurso(){
                return $this ->curso;
            }
            public function setCurso($curso){
                $this -> curso = $curso;
            }
            public function setMatri($matri){
                $this ->matri = $matri;

            }

        }

    
    ?>
    
</body>
</html>