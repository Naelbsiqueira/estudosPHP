<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objeto Pessoa</title>
</head>
<body>
    <pre>
        <?php
        require_once 'Visitante.php';
        require_once 'Professor.php';
        require_once 'Aluno.php';
        require_once 'Funcionario.php';
        require_once 'Bolsista.php';
        require_once 'Tecnico.php';
        //Programa Principal
        //$p1 = new Pessoa (); não pode ser instaciada, pois é uma classe abstrada.
        $p1 = new Visitante (); 
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();

        $p1->setNome("Pedro");
        $p2 ->setNome("Maria");
        $p3 ->setNome("João");
        $p4 ->setNome("Fabiana");
        $p1 ->setSexo("M");

        $p2 ->setCurso("Informática");
        $p3 ->setEspecialidade("Redes");
        $p4 ->setSetor("Lavanderia");
        $p3 ->setSalario(2500.75);
        
        $b1 = new Bolsista();
        $b1 -> setMatri(1111);
        $b1 ->setNome("Nael");
        $b1 ->setBolsa(12.5);
        $b1->setCurso("Tecnologia da Informação");
        $b1 ->setSexo("M");
        $b1 ->setIdade(29);
        $b1-> RenovarBolsa();

        $b1 ->pagarMensal();
        print_r($b1);

        $t1 = new Tecnico();
        $t1 -> setMatri(1578);
        $t1 ->setNome("Ricardo");
        $t1->setCurso("Medicina");
        $t1 ->setSexo("M");
        $t1 ->setIdade(25);
        $t1-> Praticar();
        $t1 ->setRegistroProfi(2415);
                
        print_r($t1);

        

        
        
        ?>



    </pre>
    
</body>
</html>