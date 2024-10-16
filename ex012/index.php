<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário minimo</title>
    <link rel="stylesheet" href="../ex004/style.css">
</head>
<body>
    <?php
        $salario = $_POST['salario'] ?? 1380;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?$_SERVER['PHP_SELF']?>" method="post">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="">
            <label for="">Considerando o salário mínimo de <strong>R$1.380,00</strong></label>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php        
            $resultado = $salario / 1380;
            $resto = $salario % 1380;

            echo "<p>Quem recebe um salário de $salario ganha ".intval($resultado)." salários mínimos + R$ $resto.</p>";
        ?>
    </section>

</body>
</html>