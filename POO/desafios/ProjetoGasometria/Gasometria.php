<?php
require_once 'Paciente.php';

class  Gasometria {
            private $sato2;
            private $k;
            private $ph;
            private $hco3;
            private $po2;
            private $pco2;


        function __construct($sato2,$ph,$hco3,$pco2,$k,$po2){         
            $this -> sato2 = $sato2;
            $this -> k = $k;
            $this -> ph = $ph;
            $this -> hco3 = $hco3;
            $this -> po2 = $po2;
            $this -> pco2 = $pco2;
            
            }
            public function situacaoPaciente(){
                echo "<p><hr>A Saturação está em " .$this ->getSaturação()."% do paciente ";
                echo "apresentado, " .$this -> getPercentilHidro()." de ph, um postássio de ".$this-> getPotassio()." mmol/L, ";
                echo "Bicarbonato de ". $this -> getBicarbonato()." mEq/L";
                echo ", ". $this -> getOxigenio() ."% de oxigênio circulando no organismo.";
                echo "Apresentando ". $this -> getGasCarbono()."(PCO²) pressão parcial de gás carbono.";
                echo "<p>Seu estado Fisiológico :</p>";
                        $this -> perceHidro();
                        $this -> sitPotassio();
                        $this -> saturacao();
                
            }
            public function saturacao(){
                if ($this -> getSaturação() <=60 ){
                    print "<p>Saturação extremamente baixa, PACIENTE EM CHOQUE</p>";
                }
                elseif ($this -> sato2 <= 80) {
                    print "<p>Saturação extremamente baixa !!! instale um MNR à 15L/min</p>";
                }
                elseif( $this -> sato2 <=90){
                    print "<p>Verifique se o paciente apresenta alguma comorbidade ou doença relacionada.
                    Se não apresentar, instale um CN à 3L/min</p>";
                }else{
                    print "<p>Saturação normal</p>";
                }
            }
            
            public function perceHidro(){
                    //PH NORMAL
                if ($this-> ph >= 7.35 && $this-> ph <= 7.45) {
                    if ($this -> hco3 >= 22 && $this-> hco3 <= 26 || $this-> pco2 >= 35 && $this -> pco2 <= 45){
                    print"<p>Paciente com PH normal, sem alterções no mecanismos compensatórios.</p>";
                }
                    elseif($this -> hco3 > 26 && $this -> pco2 > 45){
                        print "ACIDOSE RESPIRATÓRIA COMPENSADA";
                    }
                    elseif ($this-> hco3 <22 && $this -> pco2 > 45) {
                        print "ACIDOSE METABÓLICA COMPENSADA";
                    }
                }
                        //PACIENTE EM ÓBITO
                elseif ($this-> ph <= 6.80 || $this-> ph >= 7.80) {
                    print"<p>Paciente em estado GRAVÍSSIMO !!! com incopatibilidade com a vida</p>";
                }
                        //PACIENTE COM ACIDOSE
                elseif ($this-> ph >= 7.10 && $this-> ph < 7.35) {
                    if($this-> hco3 <22 && $this-> pco2 <= 35 ){
                        print"<p>Paciente apresenta ACIDOSE METABÓLICA!!! a função respiratória está tentando compensar.</p>";
                    }
                    elseif ($this-> hco3 <22 && $this-> pco2 <= 45 ) {
                        print"<p>Paciente apresenta ACIDOSE METABÓLICA!!! sem alterações no mecanismos compensatórios</p>";
                    }
                    elseif ($this-> hco3 <22 && $this-> pco2 > 45) {
                        print"<p>Paciente apresenta ACIDOSE MISTA!!!.</p>";

                    }else{
                        if ($this-> pco2 > 45 && $this-> hco3 >= 26 ) {
                            print"<p>Paciente apresenta ACIDOSE RESPIRATÓRIA!!! a função metabólica está tentando compensar.</p>";    
                    }else{
                        print"<p>Paciente apresenta acidose RESPIRATÓRIA!!! sem alterações no mecanismos compensatórios.</p>";                    
                    }
                }
            }
        
                        //PACIENTE COM ALCALOSE
                elseif ($this-> ph > 7.45 && $this-> ph <= 7.60) {
                    if($this-> hco3 > 26 && $this-> pco2 > 45){
                        print"<p>Paciente apresenta ALCALOSE METABÓLICA, a função respiratória está tentando compensar.</p>";   
                    }
                    elseif ($this-> hco3 <22 && $this-> pco2 <35) {
                        print"<p>Paciente apresenta ALCALOSE RESPIRATÓRIA, a função metabolica está tentando compensar.</p>";
                    }
                    elseif ($this-> hco3 >= 26  && $this-> pco2 >= 35 && $this-> pco2 <= 45 ) {
                        print"<p>Paciente apresenta ALCALOSE METABÓLICA, sem alterações no mecanismos compensatórios.</p>"; 
                    }elseif ($this-> pco2 < 35 && $this->hco3 >= 22 && $this-> hco3 <= 26 ) {
                        print"<p>Paciente apresenta ALCALOSE RESPIRATÓRIA, sem alterações no mecanismos compensatórios.</p>";
                    }else{
                        print"<p>Paciente apresenta ALCALOSE MISTA</p>";   
                    }
                }    
                    
                        //ACIDOSE GRAVE !!!        
                elseif ($this-> ph >= 6.81 && $this-> ph <= 7.10 ) {
                    if($this-> hco3 <22 && $this-> pco2 < 35 ){
                        print"<p>Paciente apresenta ACIDOSE METABÓLICA GRAVE !!! a função respiratória está tentando compensar.</p>";
                    }
                    elseif ($this-> hco3 >=22 && $this-> hco3 <= 26 && $this-> pco2 >=35 && $this-> pco2 <=45) {
                        print"<p>Paciente apresenta ACIDOSE METABÓLICA GRAVE !!! sem alterações no mecanismos compensatórios</p>";
                    }
                    elseif ($this-> hco3 <22 && $this-> pco2 > 45) {
                        print"<p>Paciente apresenta ACIDOSE MISTA GRAVE!!!</p>";

                    }else{
                        if ($this-> hco3 >=22 && $this-> hco3 <= 26 && $this-> pco2 >=35 && $this-> pco2 <=45) {
                            print"<p>Paciente apresenta ACIDOSE RESPIRATÓRIA GRAVE!!! sem alterações no mecanismos compensatórios.</p>";
                        }elseif ($this-> hco3 <22 && $this-> pco2 > 46) {
                            print"<p>Paciente apresenta ACIDOSE MISTA GRAVE!!!</p>";    
                        }else{
                        print"<p>Paciente apresenta  ACIDOSE RESPIRATÓRIA GRAVE!!! a função metabólica está tentando compensar.</p>";                 
                    }
                }
            }
                //ALCALOSE GRAVE
            elseif ($this-> ph >= 7.60 && $this-> ph <=7.80 ) {
                if($this-> hco3 > 26 && $this-> pco2 > 45){
                    print"<p>Paciente apresenta ALCALOSE METABÓLICA GRAVE !!! a função respiratória está tentando compensar.</p>";   
                }
                elseif ($this-> hco3 <22 && $this-> pco2 <35) {
                    print"<p>Paciente apresenta ALCALOSE RESPIRATÓRIA GRAVE !!! a função metabolica está tentando compensar.</p>";
                }
                elseif ($this-> hco3 >= 26  && $this-> pco2 >= 35 && $this-> pco2 <= 45 ) {
                    print"<p>Paciente apresenta ALCALOSE METABÓLICA GRAVE !!! sem alterações no mecanismos compensatórios.</p>"; 
                }elseif ($this-> pco2 < 35 && $this->hco3 >= 22 && $this-> hco3 <= 26 ) {
                    print"<p>Paciente apresenta ALCALOSE RESPIRATÓRIA GRAVE !!! sem alterações no mecanismos compensatórios.</p>";
                }else{
                    print"<p>Paciente apresenta ALCALOSE MISTA</p>";   
                }
            }    
        }
            public function sitPotassio(){
                if ($this-> k > 3.5 || $this-> k <= 5.1){
                    print "<p>Potássio dentro da faixa de normalidade</p>";
                    }
                elseif($this-> k <= 3.5){
                    print "<p>Corrija o potássio, está baixo</p>";
                    }
                elseif ($this-> k > 5.1){
                    print "<p>Potássio acima do valor de referência</p>";
                    }
                elseif ($this-> k >= 7){
                    print "<p>Atenção !!! Potássio muito alterado. Corrija com urgência.</p>";
                    }
                elseif($this-> k < 10){
                    print "<p>Atenção !!! Potássio extremamente alterado, paciente em risco de choque</p>";
                    }
                else {
                    print "Erro na leitura do potássio";
                    }
                }  
                
            public function getSaturação(){
                return $this-> sato2;
        
            }
            public function getPotassio(){
                return $this-> k;
                
            }
            public function getPercentilHidro(){
                return $this-> ph;
                
            }
            public function getBicarbonato(){
                return $this ->hco3;
                
            }
            public function getOxigenio(){
                return $this-> po2;
                
            }public function getGasCarbono(){
                return $this-> pco2;
                
            }public function setSaturação($sato2){
                $this-> sato2 = $sato2;
                
            }public function setPotassio($k){
                $this-> k = $k;
                
            }public function setPrercentilHidro($ph){
                $this-> ph = $ph;
                
            }public function setBicarbonato($hco3){
                $this-> hco3 = $hco3;
                
            }public function setOxigenio($po2){
                $this-> po2= $po2;
                
            }public function setPercetilOxigenio($pco2){
                $this -> pco2= $pco2;
                
            }
        }      
    

    

    

?>