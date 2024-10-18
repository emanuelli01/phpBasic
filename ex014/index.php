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
        <h1>Reajuste de Preços</h1>
        <form action="<?$_SERVER['PHP_SELF']?>" method="post">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco">
            <label for="porcentagem">Qual será o percentual de reajuste? <strong><span id="p">?</span>%</strong></label>
            <input type="range" name="porcentagem" id="porcentagem" oninput="mudaValor()">
        </form>
    </main>
    <section></section>
    <script>
        function mudaValor(){
            p.innerText = porcentagem.value;
        }
    </script>
</body>
</html>