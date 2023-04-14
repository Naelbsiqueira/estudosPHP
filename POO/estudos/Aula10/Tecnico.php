<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnico</title>
</head>
<body>
    <?php 
        require_once 'Aluno.php';
        class Tecnico extends Aluno{
            private $registroProfissional;

            public function Praticar(){
                echo "<p>".$this ->nome. "está praticando,logo está formado.</p>";
            }
            public function getRegistroProfi(){
                return $this ->registroProfissional;
            }
            public function setRegistroProfi($r){
                $this -> registroProfissional = $r;
            }
        }
        
    
    
    ?>
    
</body>
</html>