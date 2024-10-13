<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex 10</title>
    <link rel="stylesheet" href="../ex004/style.css">
</head>
<body>
    <main>
        <h1>Soma de Valores</h1>
        <?php
            $valor1 = $_POST['v1'] ?? 0;
            $valor2 = $_POST['v2'] ?? 0;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="v1">Valor 1: </label>
            <input type="number" name="v1" id="v1" value=<?=$valor1?>>
            
            <label for="v2">Valor 2: </label>
            <input type="number" name="v2" id="v2" value=<?=$valor2?>>

            <input type="submit" value="Somar">
        </form>
    </main>
    <section id='resultado'>
        <h2>Resultado</h2>
        <?php
            $resultado = $valor1 + $valor2;
            echo $resultado;
        ?>
    </section>
    
</body>
</html>