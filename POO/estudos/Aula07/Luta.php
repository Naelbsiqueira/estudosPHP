<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luta</title>
</head>
<body>
    <?php
        require_once "Lutador.php"; 
        class Luta {
            private $desaviado;
            private $desaviante;
            private $rounds;
            private $aprovado;

            //Metodos Públicos

            public function marcarLuta($l1, $l2){
               if ($l1-> getCategoria() === $l2 -> getCategoria() && ($l1 != $l2)){
                    $this-> aprovado  = true;
                    $this -> desaviado = $l1;
                    $this -> desaviante =$l2;
                
                } else {
                    $this -> aprovado = false;
                    $this -> desaviado = null;
                    $this -> desaviante = null; 
                } 
                
            }
            public function lutar(){
                if ($this -> aprovado){
                    $this -> desaviado->apresentar();
                    $this -> desaviante->apresentar();
                    $vencedor = rand(0,2);
                    switch($vencedor) {
                        case '0': // Empate
                                echo "<p>EMPATE!</p>";
                                $this ->desaviado->empatarLuta();
                                $this ->desaviante->empatarLuta();                            
                                break;

                        case '1': // Desaviado vence
                            echo "<p>".$this -> desaviado -> getNome()." Venceu</p>";
                            $this -> desaviado->ganharLuta();
                            $this -> desaviante->perderLuta();
                            break;

                        case '2':
                            echo "<p>".$this -> desaviante -> getNome()." Venceu</p>";
                            $this -> desaviado -> perderLuta();
                            $this -> desaviante -> ganharLuta();
                            break;
                            }
                }else{
                    echo"Lutar não pode acontecer";
            }
        } 
            public function getDesaviado(){
                return $this-> desaviado;
            }
            public function getDesaviante(){
                return $this-> desaviante;
            }
            public function getRounds(){
                return $this-> rounds;
            }
            public function getAprovado(){
                return $this-> aprovado;
            }
            public function setDesaviado($desaviado){
                $this ->desaviado =$desaviado;

            }
            public function setDesaviante($desaviante){
                $this -> desaviante = $desaviante;
            }
            public function setRounds($rounds){
                $this -> rounds = $rounds;

            }
            public function setAprovado($aprovado){
                $this -> aprovado = $aprovado;

            }  
        }    

    ?>
    
</body>
</html>