<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../ex004/style.css">
</head>
<body>

    <section>
        <h1><strong>Trabalhando com números aleatorios</strong></h1>
        <?php
            echo "<p>Gerando um numero aleatorio entre 1 e 10!</p>";
            if(isset($_POST["mostrar"])){
                echo "<p>Número gerado: " . rand(1,10);
            }
        ?>
        <form action="" method="post">
            <input type="submit" name = "mostrar" value="Gerar">
        </form>
    </section>

</body>
</html>