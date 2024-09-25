
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../ex004/style.css">
</head>
<body>
    <main>
        <h1>Valor convertido</h1>
        <?php
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%2708-21-2024%27&@dataFinalCotacao=%2708-28-2024%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);


            $cotaCompra = $dados["value"][0]["cotacaoCompra"];
            $cotaHora = $dados["value"][0]["dataHoraCotacao"];
            $valor = $_GET["valor"];
            $valorConvertido = number_format($valor / $cotaCompra, 2);
            //$cotaCompraF = number_format($valorConvertido, 2);

            echo "<p>Seus R\$$valor equivalem a U\$$valorConvertido !</p>";
            echo "<p>O valor da cotação foi obtido pelo <strong>Banco Central do Brasil </strong></p>";
        ?>
        <button><a href="index.html">Voltar</a></button>
    </main>
    
</body>
</html>