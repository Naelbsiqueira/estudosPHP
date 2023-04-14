<?php 
    require_once 'Animal.php';
    class Mamifero extends Animal{
        private $corPelo;

        public function locomover(){
            print '<p> Correndo </p>';

        }
        public function alimentar(){
            print '<p> Mamando </p>';
        

        }
        public function emitirsom(){
            print '<p> Som de mamífero </p>';

        }     

        public function getCorPelo(){
            return $this-> corPelo;
        }
        public function setCorPelo($corPelo){
            $this-> corPelo = $corPelo;
        }
        
    }





?>