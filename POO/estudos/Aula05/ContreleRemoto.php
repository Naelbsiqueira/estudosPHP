<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Remoto</title>
</head>
<body>
    <?php
        require_once 'Controlador.php';
        class ControleRemoto implements Controlador{
            private $volume;
            private $ligado;
            private $tocando;

            public function __construct()
            {   $this -> volume = 50;
                $this -> ligado = false;
                $this -> tocando = false;
                
            }
                
                
            private function getValume(){
                return $this-> volume;
                
            }
            private function getLigado(){
                return $this-> ligado;
                
            }
            private function getTocando(){
                return $this-> tocando;
                
            }
            private function setValume($v){
                $this -> volume = $v;
                
            }
            private function setLigado($l){
                $this -> ligado = $l;
                
            }
            private function setTocando($t){
                $this -> tocando = $t;
                
            }
            public function ligar(){
                $this ->setLigado(true);

            }
            public function desligar(){
                $this ->setLigado(false);
                    
            }
            public function abrirMenu(){
                echo"-------MENU--------"; 
                echo"<br> Está ligado?:".($this -> getLigado()? "SIM" : "NÃO");
                echo"<br> Está Tocando?:".($this -> getTocando()? "SIM" : "NÃO");
                echo"<br> Volume:".$this -> getValume(); 
                for($i=0; $i <= $this ->getValume(); $i+=10){
                    echo"|";
                }  

            }
            public function fecharMenu(){
                echo"<br> Fechando Menu...";

            }
            public function maisValume(){
                if ($this -> getLigado()){
                    $this ->setValume($this->getValume()+5);

                }
            }
            public function menosValume(){
                if ($this -> getLigado()){
                    $this ->setValume($this->getValume()-5);

                }

            }
            public function ligarMudo(){
                if($this ->getLigado() && $this->getValume() > 0){
                    $this ->setValume(0);
                }
            }
            public function desligarMudo(){
                if($this ->getLigado() && $this->getValume() == 0){
                    $this ->setValume(50);
                }
            }
            public function play(){
                if ($this ->getLigado() &&  !($this->getTocando())){
                    $this-> setTocando(true);
                }

            }
            public function pause(){
                if ($this ->getTocando() && $this-> getLigado()){
                    $this-> setTocando(false);
                }

            }


        } 
    
    
    
    
    ?>
    
</body>
</html>