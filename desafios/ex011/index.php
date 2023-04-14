<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $preco = (int)$_POST['preco']??0;
    $porcentagem  = (int)$_POST['porcente']??0;
    $resultado = $preco+ ($preco*$porcentagem/100);
    
    
    ?>
    <section>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="idpreco">Preço do Produto</label>
        <input type="number" name="preco" id="idpreco" step="0.01">
        <label for="input">Qual será o percentual de reajuste <strong>(<span id="valor">50</span>%)</strong> </label>
        <div class="slider">
            <input id="input" name="porcente" type='range' value='0' max='100' step="1">
        </div>
        <button type="submit">Calcular</button>   
        <script>
            const slider = document.querySelector('#input');
            const value = document.querySelector('#valor');
            value.textContent = slider.value;
            slider.oninput = function() {
            value.textContent = this.value;
            };
        </script>  
        
    </form>
        
    </section>
    <section>
        <h1>Resultado do reajuste</h1>
        <?php 
        echo"<p>O produto que custava <strong>".number_format($preco, 2,",",".")." R$</strong> com ";
        echo"<strong> ".$porcentagem."% de aumento</strong> vai passar ";
        echo"a custar <strong>".number_format( $resultado,2,',','.')." R$</strong> a parte de agora.</p>"
        
        
        
        ?>



    </section>
    
</body>
</html>