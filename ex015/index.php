<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ex004/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <?php 
            $valor = $_POST['seg'] ?? 0;
        ?>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" value="<?=$valor?>" required>
            <button type="submit">Calcular</button>
        </form>
    </main>
    <section>
        <?php
            $sobra = $valor;
            $semanas = (int)($valor / 604800);
            $sobra = $valor % 604800;

            $dias = (int)($sobra / 86400);
            $sobra = $sobra % 86400;

            $horas = (int)($sobra / 3600);
            $sobra = $sobra % 3600;

            $minutos = (int)($sobra / 60);
            $sobra = $sobra % 60;
            
            $segundos = $sobra;         
        ?>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($valor, 0, ",", ".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>  
    </section>
</body>
</html>