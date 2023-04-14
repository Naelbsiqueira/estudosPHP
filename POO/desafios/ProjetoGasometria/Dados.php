<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultor de Gasometria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Gasometria</h1>
        
        <form action="Resultado.php" method="post">
            <label for="idPh">PH</label>
            <input type="number" name="pertilhidro" id="idPh" step="0.01" min="6.00" max="8.00">

        <form action="Resultado.php" method="post">
            <label for="idOxi">Saturação</label>
            <input type="number" name="saturacao" id="idOxi" min="0" max="100"> 
        
        <form action="Dados.php" method="post">
            <label for="idBicar">Bicarbonato</label>
            <input type="number" name="bicarbonato" id="idBicar" min="0" max="50"> 
        
        <form action="Dados.php" method="post">
            <label for="idPco²">PCO²</label>
            <input type="number" name="gascarbono" id="idPco²" min="10" max="60">

        <form action="Dados.php" method="post">
            <label for="idPO²">PO²</label>
            <input type="number" name="oxigenio" id="idPO²" min="0" max="100">  
            

        <form action="Dados.php" method="post">
            <label for="idPota">Potássio</label>
            <input type="number" name="postassio" id="idPota" step="0.01" min="2" max="15"> 
            <button type="submit">Resultado</button>
        </form>
    </section>
    
</body>
</html>