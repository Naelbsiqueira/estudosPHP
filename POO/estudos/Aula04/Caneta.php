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
        class Caneta {
            public $modelo;
            private $cor;
            private $ponta;
            private $tampada;

            /*public function __construct(){ // No método construtor 
                $this -> cor = "Azul";
                $this -> tampar();

            }*/

            public function __construct($modelo, $cor, $ponta){ // No método construtor.
                $this -> modelo = $modelo;
                $this -> cor = $cor;
                $this -> ponta = $ponta;
                $this -> tampar();

            }
            public function tampar(){
                $this -> tampada = true;

            }

            public function getModelo() {
                return $this-> modelo;
            }
            public function setModelo($m) { // Atualiza/Modifica dados
                $this-> modelo = $m;
            }
            public function getPonta() {
                return $this->ponta;
            }
            public function setPonta($p) {// Atualiza/Modifica dados
                $this->ponta = $p;
            }
        }

    ?>
    
</body>
</html>