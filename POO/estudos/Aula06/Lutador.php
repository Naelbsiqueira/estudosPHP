<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lutador</title>
</head>
<body>
    <?php
            require_once "Controlador.php"; 
            class Lutador implements Controlador{
            private $nome;
            private $nacionalidade;
            private $idade;
            private $altura;
            private $peso;
            private $categoria;
            private $vitorias;
            private $derrotas;
            private $empates;

            public function __construct($no, $na, $id, $al, $pe, $vi, $de,$em)
            {   $this-> nome = $no;
                $this-> nacionalidade = $na;
                $this-> idade = $id;
                $this-> altura = $al;
                $this-> setPeso($pe);
                $this-> vitorias= $vi;
                $this-> derrotas = $de;
                $this-> empates = $em;
                
            }
        
            public function apresentar(){
                echo"<p>-----------------</p>";
                echo"<p>CHEGOU  A HORA ! </p>";
                echo"O Lutador ", $this->getNome();
                echo" veio da ", $this->getNacionalidade();
                echo", tem ".$this->getIdade()." anos,";
                echo" pesando ".$this-> getPeso()."KG, ";
                echo"ganhou ".$this->getVitorias()." lutas, ";
                echo"Perdeu " .$this->getDerrotas()." lutas, ";
                echo"empatou " . $this->getEmpates()." .<br>";

            }
            public function status(){
                echo"<p>------------------</p>";
                echo "<p>". $this->getNome()."</p>";
                echo "<p>É um lutador peso ".$this-> getCategoria().";</p>" ;
                echo "<p>".$this-> getVitorias()." vitórias;</p>";
                echo "<p>".$this->getDerrotas()." derrotas</p>";
                echo "<p>".$this->getEmpates(). " empates.</p>";               
                
            }
            public function ganharLuta(){
                $this -> setVitorias($this->getVitorias()+1);
                
            }
            public function perderLuta(){
                $this -> setDerrotas($this->getDerrotas()+1);
                
            }
            public function empatarLuta(){
                $this ->setEmpates($this-> getEmpates()+1);
                
            }
            private function getNome(){
                return $this ->nome;
            }
            private function getNacionalidade(){
                return $this ->nacionalidade;
            }
            private function getIdade(){
                return $this ->idade;
            }
            private function getAltura(){
                return $this ->altura;
            }
            private function getPeso(){
                return $this ->peso;
        
            }
            private function getCategoria(){
                return $this ->categoria;
            }
            private function getVitorias(){
                return $this ->vitorias;
            }
            private function getDerrotas(){
                return $this ->derrotas;
            }
            private function getEmpates(){
                return $this ->empates;
            }
            private function setNome($no){
                $this -> nome = $no;
            }
            private function setNacionalidade($na){
                $this -> nacionalidade= $na;
            }
            private function setIdade($id){
                $this -> idade = $id;
            }
            private function setAltura($al){
                $this -> altura = $al;
            }
            private function setPeso($pe){
                $this -> peso= $pe;
                $this -> setCategoria();
            }
            private function setCategoria(){               
    
                if($this-> peso <52.2 ){
                    $this-> categoria = "invalido";
                }else if($this -> peso <=70.3){
                    $this-> categoria = "leve";
                }elseif($this -> peso <=83.9){
                    $this -> categoria= "Médio";
                }elseif($this -> peso <= 120.2){
                    $this-> categoria = "Pesado";
                }else{
                    $this ->categoria = "invalido";
                }               
            }
            private function setVitorias($vi){
                $this -> vitorias = $vi;
            }
            private function setDerrotas($de){
                $this -> derrotas = $de;
            }
            private function setEmpates($em){
                $this -> empates = $em;
            }        
        }
    ?>
</body>
</html>