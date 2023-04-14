<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContaBanco</title>
</head>
<body>
    <?php 
        class ContaBanco {
            public $numConta;
            protected $tipo; 
            private $dono;
            private $saldo;
            private $status = false;
                      
            // Métodos ou Funções
            public function abrirConta($t){
                $this -> setTipo($t);
                $this -> setStatus(true);
                if($t == "CC"){
                    $this -> setSaldo(50);
                } elseif ($t == "CP" ){
                    $this -> saldo = 150 ;
                }               

            }
            public function fecharConta(){
                if($this -> status == true && $this -> saldo == 0){
                    print "<p>Conta de ".$this ->getDono()." fechada com sucesso!</p>";
                    $this ->setStatus(false);
                } elseif ($this -> saldo > 0) {
                    print"<p>realize o saque para fechar a conta</p>";
                } elseif ($this -> saldo < 0) {
                    print "<p>Quite o débitos para realizar o fechamento da conta</p>";
                }
            }
            public function depositar($v){
                if ($this -> status == true) {
                    $this -> setSaldo($this -> getSaldo() + $v);
                    //$this-> saldo = $this -> saldo + $v;
                    print "<p>Deposito de ".$v."  realizado com sucesso na conta de ".$this -> getDono().".</p>";
                } else {
                    print "<p>ERRO ! Realize a abertura de um a conta para realizar o deposito</p>";
                }
                
            }
            public function sacar($v){
                if($this -> status == true) 
                    if ($this -> getSaldo() >= $v){
                        //$this -> saldo = $this -> saldo =-$v;
                        $this -> setSaldo($this -> getSaldo()- $v);
                        print "<p>Saque realizado com sucesso, valor retirado R$$v, na conta de ".$this-> getDono().".</p>"; 
                }   else{
                    print "<p>Saldo insuficiente para saque.</p>";
                }
                else{
                    print"<p>ERRO! Realize a abertura da conta para realizar movimentações</p>";
                }                       
                
            }
            public function pagarMensal(){
                if($this -> getTipo() == "CP"){
                    $v = 12;
                }   elseif($this ->getTipo() == "CC") {
                    $v = 20; 
                }
                if ($this -> getStatus()){
                    $this -> setSaldo($this->getSaldo() -$v);
                    print"<p> Mensalidade de R$ $v debitado na conta de ".$this->getDono().".</p>";

                }else{
                    print"<p>Problemas com a conta, pagamento não realizado</p>";
                }           
                
            }            

            //Metodos Especiais
        
            public function getNumConta() {
                return $this-> numConta;
            }
            public function setNumconta($numConta) { // Atualiza/Modifica dados
                $this-> numConta = $numConta;
            }
            public function getTipo() {
                return $this->tipo;
            }
            public function setTipo($tipo) {// Atualiza/Modifica dados
                $this -> tipo = $tipo;
            }
            public function getDono(){
                return $this -> dono;
            }
            public function setDono($dono){
                $this ->dono = $dono;
            }
            public function getSaldo(){
                return $this -> saldo;
            }
            public function setSaldo($saldo){
                $this -> saldo = $saldo;
            }
            public function getStatus(){
                return $this -> status;
            }
            public function setStatus($status){
                $this -> status = $status;
            }
            public function getEstrato(){
                return $this -> saldo;
            }
            public function setEstrato($saldo){
                $this -> saldo = $saldo;
            }
            public function __construct(){
                $this -> setSaldo(0); 
                $this -> setStatus(false);
                echo"<p>Contra Criada com sucesso!</p>";
                

            }
        }
    
    
    
    
    
    
    
    ?>
    
</body>
</html>