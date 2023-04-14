<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gasometria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
<?php
     require_once "Gasometria.php";
     require_once "Paciente.php";
  
     $r0= $_POST['saturacao'];
     $r1= $_POST['pertilhidro'];
     $r2= $_POST['bicarbonato'];
     $r3= $_POST['gascarbono'];
     $r4= $_POST['postassio'];
     $r5= $_POST['oxigenio'];

    $r = new Gasometria ($r0,$r1,$r2,$r3,$r4,$r5);

    $r->situacaoPaciente();

    
    ?>
    <input type="button" onclick="javascript:history.go(-1)" value="VOLTAR">
    <pre></pre>

    </section>

    
    
    
</body>
</html>