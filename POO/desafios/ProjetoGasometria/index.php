<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Paciente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<main>
        <h1>Paciente</h1>
        <form action="Resultado.php" method="POST">
            <p>
              <label for="idnome">Nome</label>
            <input type="text" name="nome" id="idnome">  
            </p>            
        <p>
            <legend>Sexo</legend>
            
            <input type="radio" name="sexo" id="idmas">
            <label for="idmas">Masculino</label>
            <input type="radio" name="sexo" id="idfem">
            <label for="idfem">Feminino</label>
        </p>
        <p>
            <label for="ididade">idade</label required>
            <input type="text" name="idade" id="ididade">
        </p>
            
             <p>
               <button type="submit">Cosultar Gasometria</button>
                <button type="reset">Limpar</button>  
             </p>                      
             
        </form>
    


</main>
    
    
</body>
</html>