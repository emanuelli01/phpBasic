<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 11</title>
    <link rel="stylesheet" href="../ex004/style.css">
</head>
<body>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <?php
            $dividendo = $_POST['dividendo'] ?? 0;
            $divisor = $_POST['divisor'] ?? 1;
        ?>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h1>Estrutura da divisão</h1>
        <?php
            $resultado = $dividendo / $divisor;
            $resto = $dividendo % $divisor;         
        ?>
        <table class='divisao'>
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$resultado?></td>
            </tr>
        </table>
    </section>
</body>
</html>