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
        <h1>Conversor de Moedas v1.0</h1>
        <?php
            $resultado = $_GET["valor"];
            $converteDolar = $resultado / 5.60;
            $format = number_format($converteDolar, 2);
            echo "Seus R$$resultado equivalem à $$format";
            echo "<hr><br><strong>*Cotação fixa de R$5,60</strong> informada diretamente no código";
        ?>
        <br>
        <button><a href="index.html">Voltar</a></button>
    </main>
    
</body>
</html>