<?php 
    require_once 'Animal.php';
    class Ave extends Animal{
        public $corPena;

    public function locomover(){
            print '<p> Voando </p>';

        }
    public function alimentar(){
            print '<p> Comendo grãos</p>';

        }
    public function emitirsom(){
            print '<p> Cantando </p>';

        } 

    public function FazerNinho(){
        print "<p> Constrindo um ninho ... </p>";

    }
    public function getCorPena(){
        return $this->corPena;

    }
    public function setCorPena($cp){
        $this-> corPena =$cp;
    }
}





?>