<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Livro</title>
</head>
<body>
    <?php 
        require_once 'Publicacao.php';
        require_once 'Pessoa.php';
        class Livro implements Publicacao{
            private $titulo;
            private $autor;
            private $totPaginas;
            private $pagAtual;
            private $aberto;
            private $leitor;

            public function detalhes(){
                echo "<hr>Livro " .$this ->titulo." escrito por ". $this ->autor. ";<br>";
                echo "Com " .$this -> totPaginas." páginas, atual ".$this->getPagAtual();
                echo "<br>Sendo lido por ". $this -> leitor -> getNome().".<br>";

            }
            function __construct($titulo,$autor,$totPaginas,$leitor){
                $this -> titulo = $titulo;
                $this -> autor = $autor;
                $this ->totPaginas = $totPaginas;
                $this ->leitor = $leitor;
                $this ->aberto = false;
                $this->pagAtual = 0;
                
            }

            public function abrir(){
                $this-> aberto = true; 

            }
            public function fechar(){
                $this -> aberto =false;

            }
            public function folhear($p){
                if($p > $this->totPaginas){
                    $this->pagAtual=0;
                }else{
                    $this->pagAtual = $p;
                }

            }
            public function avancarPag(){
                $this -> pagAtual++;

            }
            public function voltarPag(){
                $this ->pagAtual --;

            }
            
            public function getTitulo(){
                return $this ->titulo;

            }
            public function getAutor(){
                return $this ->autor;
                
            }
            public function getTotPaginas(){
                return $this -> totPaginas;
            }
            public function getPagAtual(){
                return $this -> pagAtual;
            }
            public function getAberto(){
                return $this ->aberto;
            }
            public function getLeito(){
                return $this -> leitor;
            }
            private function setTituto($titulo){
                $this -> titulo = $titulo;
            }
            private function setAutor($autor){
                $this ->autor = $autor;
            }
            private function setTotPaginas($totPaginas){
                $this -> totPaginas = $totPaginas;
            }
            private function setPagAtual($pagAtual){
                $this ->pagAtual = $pagAtual;
            }
            private function setAberto($aberto){
                $this -> aberto = $aberto;
            }
            private function setLeitor($leitor){
                $this -> leitor = $leitor;
            }     





        }
    
    
    
    
    ?>
    
</body>
</html>