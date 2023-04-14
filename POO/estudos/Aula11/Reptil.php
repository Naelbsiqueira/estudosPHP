<?php
    require_once 'Animal.php';
    class Reptil extends Animal{
        private $corEscama;

        public function locomover(){
            print '<p> Rastejando </p>';

        }
        public function alimentar(){
            print '<p> Comendo vegetais </p>';


        }
        public function emitirsom(){
            print '<p> Som de réptil</p>';

        }
        public function getCorEscama(){
            return $this -> corEscama;
        }
        public function setCorEscama($cs){
            $this -> corEscama = $cs;
        }



    }





?>