<?php 
    require_once 'Mamifero.php';
    class Canguru extends Mamifero{

        public function locomover(){
            print " Pulando";
        }
        public function alimentar(){
            print 'Comendo folhas';

        }    
        public function UsaBolsa(){
            print "Carregando as Crias";
        }
        
    }





?>