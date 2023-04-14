<?php 
    require_once 'Pessoa.php';
    class Paciente extends Pessoa{
        public  $nome;
        public  $idade;
        public  $sexo;
        
        public function __construct($nome,$idade,$sexo){
            $this->nome = $nome;
            $this->idade =$idade;
            $this->sexo = $sexo;

        }
        public function dadosPaciente(){
            echo "<p><hr>O nome do paciente é " .$this ->getNome(). " ";
            echo "Tem" .$this -> getIdade()." é do sexo ".$this->getSexo()."";
        }
        public function getNome(){
            return $this-> nome;

        }
        public function getIdade(){
            return $this-> idade;
            
        }
        public function getSexo(){
            return $this-> sexo;
            
        }
        public function setNome($nome){
            $this-> nome = $nome;
            
        }public function setIdade($idade){
            $this-> idade = $idade;
            
        }public function setSexo($sexo){
            $this -> sexo = $sexo;
            if ($_POST['sexo']){
                $sexo = Masculino;
            }
            
        }
            
        }

    
    




?>