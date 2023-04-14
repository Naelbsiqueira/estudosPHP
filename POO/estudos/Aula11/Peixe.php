<?php 
    require_once 'Animal.php';
    class Peixe  extends Animal{
        private $corEscama;


        public function locomover(){
            print '<p> Nadando </p>';

        }
        public function alimentar(){
            print '<p> Comendo Corais  </p>';

        }
        public function emitirsom(){
            print '<p> Peixe não emite som </p>';

        }
        public function soltaBolha(){
            print '<p> Soltou uma bolha </p>';
        }        



        public function getCorEscama(){
            return $this ->corEscama;

        }
        public function setCorEscama($cs){
            $this ->corEscama = $cs;
        }
    }







?>