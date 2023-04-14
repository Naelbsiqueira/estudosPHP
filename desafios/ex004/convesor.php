<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <section>
        <?php
            // Cotação copiada do Google
            $real = $_GET['conversor'] ?? 0;
            //Quanto você tem ?
            $inicio =date("m-d-Y", strtotime("-7 days"));
            
            $fim =date("m-d-Y") ;

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url),true);

            //var_dump($dados);
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            // Equivalência em dolar

            $dolar = $real / $cotacao;

            /*print"Seus R$ ". number_format($val, 2, "," , ".") ." equivalem a US$ ". number_format($tot, 2, "," , ".")."</br>";        
            print" <strong> Cotação fixa de R$5,29</strong>, informada diretamente no código.</br>"*/
            //Formatação com internacionalização !

            $padrao = numfmt_create("pt-BR",NumberFormatter::CURRENCY);

            print"Seus ". numfmt_format_currency($padrao,$real,"BRL") ." equivalem a ". numfmt_format_currency($padrao, $dolar, "USD")."</br>";        
            print" <strong> $cotacao </strong>, informado diretamente pelo Banco Central.</br>"  

        ?>
        <p> <a href="index.html">Voltar</a></p>
            

    </section>
    
    
</body>
</html>