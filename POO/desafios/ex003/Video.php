<?php 
    require_once 'AcoesVideos.php';
    class Video implements AcoesVideo{
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $produzindo;

        public function __construct($titulo){
            $this -> titulo = $titulo;
            $this ->avaliacao = 1;
            $this ->views = 0;
            $this -> curtidas = 0;
            $this ->produzindo = false;
            
        }
    
        public function play(){
            if($this-> produzindo == false){
                $this->produzindo = true;

            }

        }
        public function pause(){
            if($this -> produzindo == true){
                $this->produzindo = false;

            }
            

        }
        public function like(){
            return $this-> curtidas ++;

        }

        public function getTitulo(){
            return $this ->titulo;

        }
        public function getAvaliacao(){
            return $this -> avaliacao;
            
        }

        public function getViwes(){
            return $this ->views;
        }

        public function getCurtidas(){
            return $this ->curtidas;
        }

        public function getProduzindo(){
            return $this ->produzindo;
        }

        public function setTitulo($titulo){
            $this ->titulo = $titulo;
        }

        public function setAvaliacao($avaliacao){
            $media = ($this-> avaliacao+$avaliacao)/$this ->getViwes();
            $this -> avaliacao = $media;
            
        }

        public function setViews($views){
            $this ->views = $views;
            
        }

        public function setCurtidas($curtidas){
            $this ->views = $curtidas;
            
        }

        public function setProduzindo($produzindo){
            $this ->produzindo = $produzindo;
            
        }







    }







?>