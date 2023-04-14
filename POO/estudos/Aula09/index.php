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
        require_once 'Professor.php';
        require_once 'Aluno.php';
        require_once 'Funcionario.php';
        //Programa Principal
        $p1 = new Pessoa();
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
        
        $p1 ->setIdade(30);
        $p1 ->fazerAniv();
        $p2 ->setIdade(40);
        $p2 ->fazerAniv();
        $p3 ->setIdade(42);
        $p4 ->setIdade(23);
        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);

        
        
        ?>



    </pre>
    
</body>
</html>